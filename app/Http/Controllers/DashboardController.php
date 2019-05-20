<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        $counttransaction = Transaction::all()->count();
        $countnasgor= Transaction::where('name','like', '%Nasi Goreng%')->get()->count();
        $countesteh= Transaction::where('name','like', '%Es Teh%')->get()->count();
        $countesdegan= Transaction::where('name','like', '%Es Degan%')->get()->count();
        $countmiegoreng= Transaction::where('name','like', '%Mie Goreng%')->get()->count();
        return view('welcome', [
            'transaction' => $transaction, 
            'countnasgor'=> $countnasgor,
            'countesteh'=> $countesteh,
            'countesdegan'=> $countesdegan,
            'countmiegoreng'=> $countmiegoreng,
            'counttransaction'=> $counttransaction
            ]);
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
        Transaction::create($request->all());
        return redirect('/dashboard')->with('success','Data telah terkirim');
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
