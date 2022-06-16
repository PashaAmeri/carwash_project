<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use function PHPSTORM_META\map;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data = [
            'services' => Service::all()
        ];

        return view('reserve', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = $request->all();
        $date_and_time = explode('T', $inputs['date']);

        $service_timestamp = self::serviceTimestamp($inputs['service']);

        $reservation_time = Carbon::createFromTimestamp($reservation_timestamp = self::inputDateToTimestamp($date_and_time[0], $date_and_time[1] . ':00'));
        $reservation_end_time = Carbon::createFromTimestamp($reservation_timestamp + $service_timestamp[0]);
        $star_working = self::inputDateToTimestamp($date_and_time[0], '09:00:00');
        $end_working = self::inputDateToTimestamp($date_and_time[0], '09:00:00');

        $service = Service::find($inputs['service']);

        // if ($reservation_timestamp > $star_working and $reservation_timestamp < $end_working) {

        $is_time_free = false;

        for ($slot = 1; $slot <= 2; $slot++) {

            $reserved_dates = Booking::where('date', $date_and_time[0])
                ->where('slot', $slot)
                ->whereBetween('time', [$date_and_time[1], $reservation_end_time
                    ->format('H:i:s')])
                ->get(['time', 'service_id', 'time_required']);

            if (sizeof($reserved_dates) === 0) {

                $is_time_free = true;
                break;
            } else {

                foreach ($reserved_dates as $reserved_date) {

                    $start_reserved_time = self::inputDateToTimestamp($date_and_time[0], $reserved_date->time);
                    $end_reserved_time = $start_reserved_time + self::serviceTimestamp($reserved_date->service);

                    // if (sizeof($reserved_dates) === 1) {

                    // ddd($start_reserved_time, $reservation_end_time , $end_reserved_time ,$reservation_time);
                    if ($start_reserved_time < $reservation_end_time->timestamp and $end_reserved_time < $reservation_time->timestamp or $start_reserved_time > $reservation_end_time->timestamp and $end_reserved_time > $reservation_time->timestamp) {

                        $is_time_free = true;
                        break;
                    }
                    // }

                    // if (!isset($loop_var)) {

                    //     $loop_var[] = $start_reserved_time;
                    //     $loop_var[] = $end_reserved_time;

                    //     continue;
                    // }

                    // if () {

                    //     $is_time_free = true;
                    //     break;
                    // }

                    // if (($end_reserved_time - $reservation_end_time->timestamp) <= $service_timestamp[0]) {

                    //     dd($end_reserved_time);
                    //     $loop_var = true;
                    //     break;
                    // }

                    // $loop_var = $reserved_date;

                    // $date = self::inputDateToTimestamp($date_and_time[0], $reserved_date->time);
                }
            }
        }

        if ($is_time_free) {

            $booking = new Booking;

            $booking->service_id = $inputs['service'];
            $booking->slot = $slot;
            $booking->date = $date_and_time[0];
            $booking->time = $date_and_time[1];
            $booking->total_price = $service->price;
            $booking->time_required = $service->time_required;
            $booking->full_name = $inputs['fullname'];
            $booking->phone_number = $inputs['phone'];
            $booking->description = $inputs['description'];

            $booking->save();
            // dd($booking);
            return redirect("reservation/" . $booking->id ?? 1);
        }
        // }

        return redirect()->route('reserve.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $inputs = $request->all();
        $date_and_time = explode('T', $inputs['date']);

        $service_timestamp = self::serviceTimestamp($inputs['service']);

        $reservation_time = Carbon::createFromTimestamp($reservation_timestamp = self::inputDateToTimestamp($date_and_time[0], $date_and_time[1] . ':00'));
        $reservation_end_time = Carbon::createFromTimestamp($reservation_timestamp + $service_timestamp[0]);

        $service = Service::find($inputs['service']);

        $is_time_free = false;

        for ($slot = 1; $slot <= 2; $slot++) {

            $reserved_dates = Booking::where('date', $date_and_time[0])
                ->where('slot', $slot)
                ->whereBetween('time', [$date_and_time[1], $reservation_end_time
                    ->format('H:i:s')])
                ->get(['time', 'service_id', 'time_required']);

            if (sizeof($reserved_dates) === 0) {

                $is_time_free = true;
                break;
            } else {

                foreach ($reserved_dates as $reserved_date) {

                    $start_reserved_time = self::inputDateToTimestamp($date_and_time[0], $reserved_date->time);
                    $end_reserved_time = $start_reserved_time + self::serviceTimestamp($reserved_date->service);

                    if ($start_reserved_time < $reservation_end_time->timestamp and $end_reserved_time < $reservation_time->timestamp or $start_reserved_time > $reservation_end_time->timestamp and $end_reserved_time > $reservation_time->timestamp) {

                        $is_time_free = true;
                        break;
                    }
                }
            }
        }

        if ($is_time_free) {

            $booking = Booking::find($id);

            $booking->service_id = $inputs['service'];
            $booking->slot = $slot;
            $booking->date = $date_and_time[0];
            $booking->time = $date_and_time[1];
            $booking->total_price = $service->price;
            $booking->time_required = $service->time_required;
            $booking->full_name = $inputs['fullname'];
            $booking->phone_number = $inputs['phone'];
            $booking->description = $inputs['description'];

            $booking->save();

            return redirect()->route("reservation/$booking->id");
        } else {

            return redirect()->route('reserve.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function inputDateToTimestamp($date, $time)
    {

        return Carbon::createFromFormat('Y-m-d H:i:s', $date . ' ' . $time)->timestamp;
    }

    public static function serviceTimestamp($in)
    {

        switch ($in) {

            case '1':

                return [60 * 15, '00:15:00'];
                break;

            case '2':

                return [60 * 20, '00:20:00'];
                break;

            case '3':

                return [60 * 60, '01:00:00'];
                break;
            default:

                return '4';
                break;
        }
    }
}
