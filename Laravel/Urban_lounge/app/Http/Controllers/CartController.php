<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {

        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('source.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    ///-------------------------------------------------- explanation{

    //1) Setup laravelshoppingcart package "Cart"

    //2) grabs all request from menu page and return to cartlist where its being displayed

    //3) grabs all request from menu page and return to cartlist where its being displayed even if it's  already there it just updates the quantity of that product.

    //4) grabs the id where the remove button has been click and remove it from out of the cart


    //5) just clear every id and request and product that is displayed in the cart and remove


    //6) session is the message that is displayed at the top showing the customer has done something right that works.

    //7) The compact() function creates an array from variables and their values.

    //}
}
