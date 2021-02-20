<?php

namespace App\Http\Controllers;

use App\Events\NewReservationEvent;
use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\GetFreeReservationRequest;
use App\Period;
use App\Reservation;

class ReservationController extends Controller
{
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
        //Create reservation
        $reservation = Reservation::create($request->all());
        //Fire event for sending mail
        event(new NewReservationEvent($request->all()));

        return $reservation;
    }

}
