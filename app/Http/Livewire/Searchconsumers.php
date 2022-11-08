<?php

namespace App\Http\Livewire;
use App\Models\Consumer;
use Livewire\WithPagination;
use Livewire\Component;


class Searchconsumers extends Component
{
    public $searchusers;
    protected $paginationTheme = 'bootstrap';

    use WithPagination;

    public function render()
    {
        return view('livewire.searchconsumers', [
            'consumers' => Consumer::when($this->searchusers , function($query , $searchusers){
                return $query->where('cliente' , 'LIKE' , "%$searchusers%")
                ->orWhere('cliente' , 'LIKE', "%$searchusers%")
                ->orWhere('ruc' , 'LIKE', "%$searchusers%")
                ->orWhere('zona' , 'LIKE', "%$searchusers%")
                ->orWhere('region' , 'LIKE', "%$searchusers%")
                ->orWhere('distrito' , 'LIKE', "%$searchusers%");
            })->orderby('id' , 'desc')->paginate(5)
        ]);
    }
}
