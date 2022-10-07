<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Person;
use App\Models\OrderDetail;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $person = new Person();
        $person->fname = $request->input('fname');
        $person->tel = $request->input('tel');
        $person->email = $request->input('email');
        $person->pcode = $request->input('pcode');
        $person->hnumber = $request->input('hnumber');
        $person->save();

        $customerId = $person->id;

        $order = new Order();
        $order->customerId = $customerId;

        $order->save();

        
        
        $productid = $request->input('id');

        $count=count($productid);

        $quantity=$request->input('unit');
        
        for ($i=0; $i < $count; $i++) { 
            $orderDetail = new OrderDetail();
            
            $orderDetail->productid= $productid[$i];
        
            $orderDetail->quantity=$quantity[$i];
            
            $orderDetail->customerId = $order->id;

            // var_dump($productid[$i]); 

            $orderDetail->save();
        }
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        // return $id;

        $person = Person::where('id', $id)->first();

        return view('components.orderResult', ['id' => $id, 'person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
