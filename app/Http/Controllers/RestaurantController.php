<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
class RestaurantController extends Controller
{
    function show(){
        $restaurants = Restaurant::get();

        return view('list',['restaurants'=>$restaurants]);
    }

    function index($slug){

        $restaurant = Restaurant::where('id', $slug)->firstOrFail();

        return view('comment-screen',['restaurant_id'=>$slug]);
    }

    function store(Request $request){
        /* $comment=new Comment;
        $user_id = Auth::user()->id;
        return view('comment-screen',['comment'=>$comment,'user_id'=>$user_id]); */



        $comment = new Comment();
        $comment->restaurant_id = $request->rid;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->rating = $request->rating;
        $comment->save();
        return redirect()->route('restaurants', $comment->restaurant)->with('status', 'Comment Has Been inserted');
    }
}
