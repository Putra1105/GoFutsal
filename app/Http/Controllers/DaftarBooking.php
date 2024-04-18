<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class DaftarBooking extends Controller
{
    /**
     * Show the form for creating the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {

        
        $query = Booking::query();

    // Filter berdasarkan jenis lapangan
    if ($request->has('jenis')) {
        $query->whereHas('lapangan', function($q) use ($request) {
            $q->where('jenis', $request->jenis);
        });
    }

    // Menambahkan filter berdasarkan lokasi lapangan
    if ($request->has('lokasi')) {
        $query->whereHas('lapangan', function($q) use ($request) {
            $q->where('lokasi', $request->lokasi);
        });
    }

    // Gunakan $query->get() untuk mendapatkan hasil query yang sudah difilter
    $daftarbooking = $query->get()->map(function ($booking) {
        $start = Carbon::parse($booking->date_start);
        $end = Carbon::parse($booking->date_end);
        $difference = $start->diffInHours($end); // Menghitung selisih dalam jam

        // Menambahkan selisih waktu ke dalam objek booking
        $booking->difference_in_hours = $difference . ' hours';
        return $booking;
    });

        return view('daftarbooking', compact('daftarbooking'));
        
        }

    public function create()
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        abort(404);
    }
}
