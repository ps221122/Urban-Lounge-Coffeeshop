<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menulist;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class MenulistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breakfast=Menulist::where('categoryid',1)->get();
        $pizza=Menulist::where('categoryid',2)->get();
        $vegan=Menulist::where('categoryid',3)->get();
        $pasta=Menulist::where('categoryid',4)->get();
        $dinner=Menulist::where('categoryid',5)->get(); 
        $beverage=Menulist::where('categoryid',6)->get();
        $alcohol=Menulist::where('categoryid',7)->get();
        $dessert=Menulist::where('categoryid',8)->get();
       
     
        return view('menu.menulist',['breakfast'=>$breakfast, 'pizza'=>$pizza, 'vegan'=>$vegan, 'pasta'=>$pasta, 'dinner'=>$dinner,'alcohol'=>$alcohol, 'beverage'=>$beverage,'dessert'=>$dessert]);
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
        //
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
}
