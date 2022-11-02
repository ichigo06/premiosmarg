<?php

namespace App\Http\Livewire;

use App\Models\Consumer;
use App\Models\User;
use Livewire\Component;

class ConsumerUser extends Component
{

    public $consumers = null;
    public $users = null;

    public $selectedCustomers = null;
    public function updatedSelectedCustomers() {
        $this->getUser();
    }
    public function mount() {
        $this ->  consumers = Consumer::orderby('cliente')->get();
    }
    public function getUser() {
        if($this->selectedCustomers != '') {
            $this -> users = User::where('id_consumers' , $this->selectedCustomers)->get();
        } else {
            $this->users = [];
        }   
    } 
    
    public function render()
    {
        return view('livewire.consumer-user');
    }
}
