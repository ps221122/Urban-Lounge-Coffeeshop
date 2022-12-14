<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class userController extends Controller
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
    public function emailUpdate(Request $request, $id)
    {
    //  $request->validate([ 
    //       'u_email'  => 'required',
    //       'u_name'  => 'required',
         
    //     ]);
        $user= User::where('id',$id)->first();
        $user->name=$request ->input('u_name');
        $user->email=$request ->input('u_email');
        

        $user->update();
    
        session()->flash('success', 'Account name successfully changed!');

         return redirect('/Dashboard');
    }

     public function imageUpdate(Request $request, $id)
    {
     $request->validate([ 
          'image'  => 'required',
        ]);

        $user= User::where('id',$id)->first();

        $user->image=$request ->input('image');
        
        $user->update();
    
        session()->flash('success', 'Profile image successfully changed!');

        return redirect('/Dashboard');
    }

    public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        session()->flash('success', 'Password changed successfully!');

         //return redirect('/Dashboard');

        return back()->with("status", "Password changed successfully!");

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy ($id);

        session()->flash('success', 'Account successfully deleted!');

         return redirect('/Home');
    }
}
