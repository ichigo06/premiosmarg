<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Objective;
use Carbon\Carbon;
use App\Models\Consumer;
use App\Models\Sales;


class FirstComponent extends Component

{
    public $ruc = [];
    public $venta = null;
    public $objective = null;
    public $users = null;
    public $selectedRuc = null;
    public $month;
    public $selectEnero;
    public $selectFebrero;
    public $selectMarzo;
    public $selectAbril;
    public $selectMayo;
    public $selectJunio;
    public $selectJuilo;
    public $selectAgosto;
    public $selectSeptiembre;
    public $selectOctubre;
    public $selectNoviembre;
    public $selectDiciembre;
    public $fechaFiltro;

    public function mount() {
        $this ->  consumers = Consumer::orderby('cliente')->get();
        $this -> month = Carbon::now()->format('2022-01');
        $this -> month2 = Carbon::now()->format('2022-02');
        $this -> month3 = Carbon::now()->format('2022-03');
        $this -> month4 = Carbon::now()->format('2022-04');
        $this -> month5 = Carbon::now()->format('2022-05');
        $this -> month6 = Carbon::now()->format('2022-06');
        $this -> month7 = Carbon::now()->format('2022-07');
        $this -> month8 = Carbon::now()->format('2022-08');
        $this -> month9 = Carbon::now()->format('2022-09');
        $this -> month10 = Carbon::now()->format('2022-10');
        $this -> month11 = Carbon::now()->format('2022-11');
        $this -> month12 = Carbon::now()->format('2022-12');
    }
    public function updatedSelectedRuc() {
        if($this->selectedRuc != '') {
            $this -> ruc = User::where('id_consumers' , $this->selectedRuc)->get();
        } else {
            $this->ruc = [];
            $this->venta = [];
        }  
    }
    public function selectEnero() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month.'-01') , Carbon::now()->format(''.$this->month.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month.'-01') , Carbon::now()->format(''.$this->month.'-31')])->sum('objective');

    }
    public function selectFebrero() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month2.'-01') , Carbon::now()->format(''.$this->month2.'-28')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month2.'-01') , Carbon::now()->format(''.$this->month2.'-28')])->sum('objective');
    }
    public function selectMarzo() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month3.'-01') , Carbon::now()->format(''.$this->month3.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month3.'-01') , Carbon::now()->format(''.$this->month3.'-31')])->sum('objective');
    }
    public function selectAbril() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month4.'-01') , Carbon::now()->format(''.$this->month4.'-30')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month4.'-01') , Carbon::now()->format(''.$this->month4.'-30')])->sum('objective');

    }
    public function selectMayo() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month5.'-01') , Carbon::now()->format(''.$this->month5.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month5.'-01') , Carbon::now()->format(''.$this->month5.'-31')])->sum('objective');

    }
    public function selectJunio() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month6.'-01') , Carbon::now()->format(''.$this->month6.'-30')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month6.'-01') , Carbon::now()->format(''.$this->month6.'-30')])->sum('objective');
    }
    public function selectJulio() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month7.'-01') , Carbon::now()->format(''.$this->month7.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month7.'-01') , Carbon::now()->format(''.$this->month7.'-31')])->sum('objective');

    }
    public function selectAgosto() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month8.'-01') , Carbon::now()->format(''.$this->month8.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month8.'-01') , Carbon::now()->format(''.$this->month8.'-31')])->sum('objective');
    }
    public function selectSeptiembre() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month9.'-01') , Carbon::now()->format(''.$this->month9.'-30')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month9.'-01') , Carbon::now()->format(''.$this->month9.'-30')])->sum('objective');
    }
    public function selectOctubre() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month10.'-01') , Carbon::now()->format(''.$this->month10.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month10.'-01') , Carbon::now()->format(''.$this->month10.'-31')])->sum('objective');
    }
    public function selectNoviembre() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month11.'-01') , Carbon::now()->format(''.$this->month11.'-30')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month11.'-01') , Carbon::now()->format(''.$this->month11.'-30')])->sum('objective');
    }
    public function selectDiciembre() {
        $this -> venta = Sales::where('id_users_sales' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month12.'-01') , Carbon::now()->format(''.$this->month12.'-31')])->sum('venta');
        $this -> objective = Objective::where('id_objective' , $this->selectedRuc)->whereBetween('created_at', [ Carbon::now()->format(''.$this->month12.'-01') , Carbon::now()->format(''.$this->month12.'-31')])->sum('objective');
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
