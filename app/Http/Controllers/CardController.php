<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VedioLessons;
use Cart;
use App\User;

class CardController extends Controller
{
    public function add(VedioLessons $video)
    {


    	\Cart::session(auth()->id())->add(array(
            'id' => $video->id,
            'name' => $video->name,
            'price' => $video->price,
            'image'=>$video->image,
            'quantity'=>1,
            'attributes' => array("image"=>$video->image, 
            						"info"=>$video->info,
        	),
            'associatedModel' => $video,
            		
        ));

         return redirect()->route('cart.index')->with('message', "video dars qo'shildi");
    }


     public function index()

    {
			
        $cartItems = \Cart::session(auth()->id())->getContent();
        $total=\Cart::session(auth()->id())->getTotalQuantity();
        
        return view('layouts.cart', array('cartItems' =>$cartItems ,
                                        'total'=>$total));
    }

    public function destroy($videoId)
    {
       \Cart::session(auth()->id())->remove($videoId);
        return redirect()->route('cart.index')->with('message', "muvaffaqiyatli o'chirildi");
    }

}
