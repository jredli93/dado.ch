<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use App\Events\NewReservationEvent;
use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\GetFreeReservationRequest;
use App\Period;
use App\Reservation;

class ReservationController extends Controller
{
    public function index($id)
    {
        $events = [];

        $events[] = Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
            ->setOptions([
                'locale' => 'srb',
                'firstDay' => 0,
                'displayEventTime' => false,
                'selectable' => true,
                'initialView' => 'dayGridMonth',
                'headerToolbar' => [
                    'end' => 'today prev,next'
                ]
            ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('pages.reservation.index', compact('calendar', 'id'));
    }

    public function getFreePeriods(GetFreeReservationRequest $request)
    {
        //Getting day name
        $dayOfWeek = date('l', strtotime($request->date));

        //All res where date is post/date and type is post/s.t.id
        $reservations = Reservation::where('date', $request->date)
            ->where('status', 'Active')
            ->where('service_type_id', $request->service_type_id)
            ->get();

        //Check if not empty
        if ($reservations->isNotEmpty()){

            //Getting all periods for selected day in week and s.t.id
            $periods = Period::where('day', $dayOfWeek)
                ->where('service_type_id', $request->service_type_id)
                ->get();

            //Check if not empty
            if ($periods->isNotEmpty()){
                foreach ($periods as $period){

                    //Reset old period fields to Active - TODO: Alternative -> cron jobs
                    $period->update(['status' => 'Active']);

                    foreach ($reservations as $reservation){
                        //Compare if reservation date id eq with period date
                        if ($period->time == $reservation->time){
                            //Update period with inactive
                            $period->update(['status' => 'Inactive']);
                        }
                    }
                }
                //Returns message for no free periods
                if ($periods->where('status', 'Active')->isEmpty()){
                    return 'There is no free periods';
                }
                //All free period per selected day
                return $periods->where('status', 'Active')->pluck('time');
            }
            //Returns message for empty periods table
            return 'There is no periods';
        }
        //Return all periods per selected day and s.t.id
        return $periods = Period::where('day', $dayOfWeek)
            ->where('service_type_id', $request->service_type_id)
            ->pluck('time');
    }

    public function createReservation(CreateReservationRequest $request)
    {
        //Check if reservation exists
        if (Reservation::where('date', $request->date)
            ->where('time', $request->time)
            ->where('service_type_id', $request->service_type_id)
            ->first()
        ){
            throw new \Exception('Reservation is taken!');
        }
        //Create reservation
        $reservation = Reservation::create($request->all());
        //Fire event for sending mail
        event(new NewReservationEvent($reservation));

        return $reservation;
    }

}
