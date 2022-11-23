<?php

namespace App\Http\Controllers;

use App\Models\Eventlist;
use App\Models\OrderDetail;
use Illuminate\Http\Request;


class EventlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Eventlist::all();
    
        return view('components.events', ['event'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// $event=Eventlist($request->all());
// dd($event);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function show(Eventlist $eventlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventlist $eventlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventlist $eventlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventlist $eventlist)
    {
        //
    }
}