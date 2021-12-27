<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        return view('home.user_reservation_add',['product_id'=>$product_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id)
    {
        $data = new Reservation();
        $data->bookdate = $request->input('bookdate');
        $data->returndate = $request->input('returndate');
        $data->IP = $_SERVER["REMOTE_ADDR"];
        $data->note = $request->input('note');
        $data->user_id = Auth::id();
        $data->product_id=$product_id;
        $bookday=strtotime($request->input('bookdate'));
        $returnday=strtotime($request->input('returndate'));
        $day=($returnday-$bookday)/(60*60*24);
        $data->days=$day;
        $data->save();
        return redirect()->route('user_reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation,$id)
    {
        $datalist=Reservation::where('user_id',Auth::id())->where('id',Auth::id())->get();
        return view('home.user_reservation_item',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
