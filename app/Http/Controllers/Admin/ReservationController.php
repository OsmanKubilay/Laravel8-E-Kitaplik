<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Reservation::all();
        return view('admin.reservations',['datalist'=>$datalist]);
    }
    public function list($status)
    {
        $datalist=Reservation::where('status',$status)->get();
        return view('admin.reservations',['datalist'=>$datalist]);
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation,$id)
    {
        $data=Reservation::find($id);

        return view('admin.reservation_items',['data'=>$data]);
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
    public function update(Request $request, Reservation $reservation,$id)
    {

        $data=Reservation::find($id);
        $productid=$data->product_id;
        $datalist=Product::find($productid);
        $datalist->status=$request->input('status');
        $data->status=$request->input('status');
        $datalist->save();
        $data->save();
        return redirect()->back()->with('success','Reservation Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$id)
    {
        DB::table('reservations')->where('id','=',$id)->delete();
        return redirect()->route('admin_reservations')->with('success','Silme ????lemi Ba??ar??l??');
    }
}
