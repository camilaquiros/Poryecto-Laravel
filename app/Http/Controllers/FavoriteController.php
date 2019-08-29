<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Auth;
use App\Pet;


class FavoriteController extends Controller
{
  public function __construct() {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $favorites = Favorite::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
      $photos = Pet::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
      return view('profile', compact('user', 'favorites', 'photos'));
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
       $this->validate($request, array(
        'user_id'=>'required',
        'product_id' =>'required',
       ));

       $status=Favorite::where('user_id',Auth::user()->id)
       ->where('product_id',$request->product_id)
       ->first();

       if(isset($status->user_id))
          {
            $status->delete();
            return redirect()->back(); //flash_message//
          }
          else
          {
            $favorite = new Favorite;
            $favorite->user_id = $request->user_id;
            $favorite->product_id = $request->product_id;
            $favorite->save();
            return redirect()->back();//flash_message//
          }

      }
}
