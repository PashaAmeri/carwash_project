<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function show($code)
    {

        return view('reservations_receipt', [
            'reservation' => $reservation = Booking::findOrFail($code),
            'service' => Service::findOrFail($reservation->service_id),
        ]);
    }
}
