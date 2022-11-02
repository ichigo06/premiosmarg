<?php

namespace App\Http\Controllers;
use App\Models\Sales;
use App\Models\User;
use Livewire\Component;
use App\Models\Objective;
use Illuminate\Http\Request;
use DB;

class ObjectiveController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectives = Objective::with('users')->orderBy('id' , 'DESC')->get();
        return view('objective.index' , compact('objectives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {           
        return view('objective.create');
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
            'objective' => 'required',
            'create_at' => 'required',
            'id_objective' => 'required',
        ]);

        $datesClient = request()->except('_token');
        
        $objective = $request -> objective;
        $id_objective = $request->id_objective;
        
        for($i = 0 ; $i < count($objective) ; $i++) {
            $datasave = [
                'objective' => $objective[$i],
                'id_objective' => $id_objective[$i],
            ];
            Objective::insert($datasave);
        }
            

        return redirect('objective');
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

        return view('objective.edit' , compact('sales'));
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
        Objective::where('id', '=' , $id)->update($datesClient);

        $objective = Objective::findOrFail($id); 
        // return view('users.edit' , compact('clients'));
        return redirect('objective');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Objective::destroy($id);

        return redirect('objective');
    }
    
}
