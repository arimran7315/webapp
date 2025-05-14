<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $services = Service::orderBy('title','ASC')->limit(5)->get();
        return view('livewire.home',compact('services'));
    }
}
