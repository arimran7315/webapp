<?php

namespace App\Livewire;

use App\Models\Team as ModelsTeam;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $teams = ModelsTeam::orderBy('name','ASC')->get();
        return view('livewire.team',compact('teams'));
    }
}
