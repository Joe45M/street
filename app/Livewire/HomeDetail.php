<?php

namespace App\Livewire;

use App\Models\Home;
use Livewire\Component;

class HomeDetail extends Component
{
    public $home;

    public function mount(Home $home)
    {
        $this->home = $home;

        dd($this->home->moistureSensorReadings);
    }


    public function render()
    {
        return view('livewire.home-detail')->layout('layouts.app');
    }
}
