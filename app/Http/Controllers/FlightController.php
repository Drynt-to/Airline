<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view("flights", compact("flights"));
    }
    public function book(Flight $flight)
    {
        return view('book', ['flights' => $flight]);
    }
    public function tickets(Flight $flight){
        $tickets = Ticket::where('flight_id', $flight->id)->orderBy('id','asc')->get();
        $count = $tickets->count();
        $boarding = $tickets->where('is_boarding', true)->count();
        return view('/ticket', compact('flight','tickets', 'count', 'boarding'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
