<?php

namespace App\Livewire;

use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Homes extends Component
{

    public $name;

    public function render()
    {
        $homes = Auth::user()->homes;


        return view('livewire.homes', [
            'homes' => $homes,
        ])->layout('layouts.app');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $home = new Home();

        $home->user_id = Auth::id();
        $home->name = $this->name;
        $home->save();
        $this->reset('name');

        $this->render();
    }


}
