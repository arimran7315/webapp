<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $services = Service::orderBy('title','ASC')->get();
        return view('livewire.services',compact('services'));
    }
}
