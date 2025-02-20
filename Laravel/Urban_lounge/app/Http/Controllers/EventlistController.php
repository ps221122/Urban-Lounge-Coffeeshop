<?php

namespace App\Http\Controllers;

use App\Models\Eventlist;
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
        // grabs all events and return it to blade.
         $event=Eventlist::all();
    
        return view('source.events', ['event'=>$event]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //grabs specific product with id and return all info connected to product
        $event=Eventlist::where('id', $id)->first();
        return view('components.preview',['eventid'=>$event]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
