<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Actor;

class Actors extends Component
{
    public $search = '';
    public $actors = [];   
    public function mount()
    {
        $this->title = 'Hello from mount!';
        $this->searchActors();     
    }

    public function searchActors()
    {
        $this->actors = Actor::with('movies')
            ->where('name', 'like', '%' . $this->search . '%')
            ->get();        
    }

    public function render()
    {   
        return view('livewire.actors')->layout('layouts.app');
    }
}
