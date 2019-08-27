<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Auth;


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
      return view('profile', compact('user', 'favorites'));
        //
    }

    public function index2()
    {
      $user = Auth::user();
      $favorites = Favorite::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
      return view('products', compact('user', 'favorites'));
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

       if(isset($status->user_id) and isset($request->product_id))
          {
              return redirect()->back()->with('flash_messaged', 'Este producto ya se encuentra en tu lista de favoritos');
          }
          else
          {
              $favorite = new Favorite;

              $favorite->user_id = $request->user_id;
              $favorite->product_id = $request->product_id;
              $favorite->save();

              return redirect()->back()->with('flash_message', 'Item, '. $favorite->product->title.' Agregamos el producto a tu lista de favoritos.');
          }

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
      $favorite = Favorite::findOrFail($id);
        $favorite->delete();

        return redirect()->route('profile#favorites')
            ->with('flash_message',
             'Eliminamos el producto de tu lista de favoritos');
    }
}
