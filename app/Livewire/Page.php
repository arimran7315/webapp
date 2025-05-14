<?php

namespace App\Livewire;

use App\Models\page as ModelsPage;
use Livewire\Component;

class Page extends Component
{
    public $page =null;
    public function mount($id){
        $this->page = $id;
    }
    public function render()
    {
        $pageData = ModelsPage::findOrFail($this->page);
        return view('livewire.page',compact('pageData'));
    }
}
