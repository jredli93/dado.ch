<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ServiceGroup;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $reservations = Reservation::where('email', 'superadmin@gmail.com')
            ->orderBy('date', 'DESC')
            ->take(500)
            ->get();

        return view('admin.index', compact('reservations'));
    }

    public function block(Request $request)
    {
        Reservation::create([
            'service_type_id' => $request->serviceTypeId,
            'name' => 'Admin',
            'email' => 'superadmin@gmail.com',
            'phone' => 1111,
            'date' => $request->fullDate,
            'time' => $request->time
        ]);

        return redirect()->back()->with('SuccessMessage', 'Successfully blocked!');
    }

    public function unblock($id)
    {
        Reservation::findOrFail($id)->delete();
        return redirect()->back()->with('SuccessMessage', 'Successfully unblocked!');
    }

}
