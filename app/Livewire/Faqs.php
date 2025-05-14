<?php

namespace App\Livewire;

use App\Models\faq;
use Livewire\Component;

class Faqs extends Component
{
    public function render()
    {
        $faqs = faq::where('status',1)->orderBy('created_at','DESC')->get();
        return view('livewire.faqs',compact('faqs'));
    }
}
