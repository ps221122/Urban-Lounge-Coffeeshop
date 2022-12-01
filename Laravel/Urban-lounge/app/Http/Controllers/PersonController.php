<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Menulist;
use App\Models\Eventlist;
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
        //first step -> create a customer with info

        $person = new Person();
        $person->fname = $request->input('fname');
        $person->tel = $request->input('tel');
        $person->email = $request->input('email');
        $person->pcode = $request->input('pcode');
        $person->hnumber = $request->input('hnumber');

        $person->save();


        //second step-> grab previous customer that was created and create a order.

        $customerId = $person->id;

        $order = new Order();

        $order->customerId = $customerId;

        $order->save();


        //third step ->
        
        // 1)get product id that have been submitted.
        // 2)get product title that have been submitted.
        // 3)loop.


        $productid=$request->input('id');

        $title=$request->input('title');

        $count=count($productid);

   
        // $itemidname1=Eventlist::whereIn('id', $productid)->get('categoryid');
        

 

        for ($i=0; $i < $count ; $i++) { 
            $orderDetail = new OrderDetail();
            
            $orderDetail->productid= $productid[$i];
        
            $orderDetail->quantity=$quantity[$i];
            
            $orderDetail->customerId = $order->id;

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
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
