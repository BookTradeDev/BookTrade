<?php

namespace App\Http\Controllers;
use DB;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
class TradeBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("tradebooks");
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

    //let's user input multiple wanted books at a time
    public function trade(Request $request)
    {
        $uid = Auth::user()->id;
        $title = Input::get('title');
        $condition = Input::get('condition');
        $booktrades = Input::get('isbn');


            foreach($booktrades as $tradebook) {
                if(is_null($tradebook)) continue;
                    DB::table('listings')->insert(['isbn' => $tradebook, 'user_id' => $uid, 'title'=>$title, 'book_condition'=>$condition]);
            }
        return response("submitted for user ID: " . $uid);
    }


        //  \DB::insert('insert into wantedbooks (isbn,user_id) values(?,?)', [array($onebook),$uid]);
        //   \DB::insert('insert into wantedbooks (isbn,user_id) values(?,2)', array($onebook));


//    public function wanted(Request $request)
//    {
//        $bookwanted = new Wantedbook();
//        $bookwanted->user_id = Auth::user()->id;
//        $bookwanted->isbn = Input::get("isbn");
//        $bookwanted->save();
//
//        return response("data saved");
//    }

    public function store(Request $request)
    {
//        $bookwanted = new Wantedbook();
//        $bookwanted->user_id = Auth::user()->id;
//        $bookwanted->isbn = Input::get("isbn");
//        $bookwanted->save();
//
//        return response("data saved");
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
