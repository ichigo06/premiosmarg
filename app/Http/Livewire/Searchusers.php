<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Searchusers extends Component
{
    public $searchusers;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.searchusers', [
            'users' => User::select('consumers.cliente', 'consumers.zona' , 'users.name' , 'users.email' , 'users.dni' , 'users.whatsapp', 'users.tel')
                ->join("consumers", "users.id_consumers", "=", "consumers.id")->when($this->searchusers , function($query , $searchusers){
                return $query->where('name' , 'LIKE' , "%$searchusers%")
                ->orWhere('cliente' , 'LIKE', "%$searchusers%")
                ->orWhere('zona' , 'LIKE', "%$searchusers%")
                ->orWhere('dni' , 'LIKE', "%$searchusers%")
                ->orWhere('email' , 'LIKE', "%$searchusers%")
                ->orWhere('whatsapp' , 'LIKE', "%$searchusers%")
                ->orWhere('tel' , 'LIKE', "%$searchusers%");
            })->orderby('id_consumers' , 'desc')->paginate(5)
        ]);
    }
}
