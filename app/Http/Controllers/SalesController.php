<?php

namespace App\Http\Controllers;
use App\Models\Sales;
use App\Models\User;
use Livewire\Component;
use App\Models\Consumer;
use Illuminate\Http\Request;
use DB;

class SalesController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::with('consumers', 'users')->orderBy('id' , 'DESC')->get();
        return view('sales.index' , compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {           
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        request()->validate([
            'id_consumers_sales' => 'required',
            'id_users_sales' => 'required',
            'venta' => 'required',
        ]);

        $datesClient = request()->except('_token');
        
        $venta = $request -> venta;
        $created = $request -> created_at;
        $id_consumers_sales = $request->id_consumers_sales;
        $id_users_sales = $request->id_users_sales;

        for($i = 0 ; $i < count($venta) ; $i++) {
            $datasave = [
                'venta' => $venta[$i],
                'created_at' => $created[$i],
                'id_consumers_sales' => $id_consumers_sales[$i],
                'id_users_sales' => $id_users_sales[$i]
            ];
            Sales::insert($datasave);
        }
            

        return redirect('sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales = Sales::findOrFail($id); 

        return view('sales.edit' , compact('sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $datesClient = request()->except(['_token' , '_method']);
        Sales::where('id', '=' , $id)->update($datesClient);

        $sales = Sales::findOrFail($id); 
        // return view('users.edit' , compact('clients'));
        return redirect('sales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sales::destroy($id);

        return redirect('sales');
    }
    
}
