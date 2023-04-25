<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request){
        $booking=new Booking();
        $booking->select_city=$request->select_city;
        $booking->select_vehical=$request->select_vehical;
        $booking->date=$request->date;
        $booking->booking_type=$request->booking_type;
        $booking->half=$request->half;
        $booking->from=$request->from;
        $booking->to=$request->to;
        $booking->text=$request->text;


        $booking->save();
       
return redirect()->route('booking.index')->with('message','Added Successfully ! ');

    }

    public function index(){

        $data=Booking::all();
        return view('booking.index',compact('data'));
    }
}
