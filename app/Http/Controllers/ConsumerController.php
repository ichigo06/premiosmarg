<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;
use DB;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumers = DB::table('consumers')->orderBy('id' , 'DESC')->get();
        return view('consumers.index' , compact('consumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datesClient = request()->all();

        $datesClient = request()->except('_token');
            
        request()->validate([
            'cliente' => 'required',
            'ruc' => 'required',
            'distrito' => 'required',
            'zona' => 'required',
            'region' => 'required',
        ]);

        Consumer::insert($datesClient);

        return redirect('consumers');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function show(Consumer $consumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumers = Consumer::findOrFail($id); 

        return view('consumers.edit' , compact('consumers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datesClient = request()->except(['_token' , '_method']);
        Consumer::where('id', '=' , $id)->update($datesClient);

        $consumers = Consumer::findOrFail($id); 
        // return view('users.edit' , compact('clients'));
        return redirect('consumers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Consumer::destroy($id);

        return redirect('consumers');
    }
}
