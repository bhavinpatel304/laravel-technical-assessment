<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;


class People extends Component
{
    public $search = '';
    public $people = [];
    // public $apiUrl = 'https://swapi.dev/api/people/?search=';
    public $apiUrl = 'https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=';
    
    public function searchPeople()
    {   
        $this->validate([
            'search' => 'required|min:3',
        ]);
        session()->flash('message', 'Name accepted: ' . $this->search);

        if(!empty($this->search))
        {
            $response = Http::get($this->apiUrl.$this->search);
            if ($response->successful() ) {
                $this->people = $response->json(); // assuming it's a plain array of actor data
            } else {
                $this->people['player'] = [];
            }
        }
        else{
            $this->people['player'] = [];
        }
    }
    
    public function render()
    {   
        return view('livewire.people')->layout('layouts.app');
    }
}
