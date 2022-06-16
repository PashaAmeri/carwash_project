<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class ChangeReservationController extends Controller
{

    public function editFormResnder($code)
    {

        return view('reservation_edit_form', [
            'reservation' => $reservation = Booking::findOrFail($code),
            'service' => Service::findOrFail($reservation->service_id),
            'services' => Service::all()

        ]);
    }

    public function edit(Request $request)
    {
        
    }
}
