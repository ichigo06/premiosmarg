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
            'users' => User::when($this->searchusers , function($query , $searchusers){
                return $query->where('name' , 'LIKE' , "%$searchusers%")
                ->orWhere('dni' , 'LIKE', "%$searchusers%");
            })->orderby('id' , 'desc')->paginate(3)
        ]);
    }
}
