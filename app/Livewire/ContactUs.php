<?php

namespace App\Livewire;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name = null;
    public $email = null;
    public $message = null;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email'
    ];
    public function submit()
    {
        $this->validate();
        $mailData = [
            'subject'=>'New mail',
            'name'=>$this->name,
            'email'=>$this->email,
            'message'=>$this->message
        ];
        Mail::to('admin@example.com')->send(new Contact($mailData));

        session()->flash('success','Thanks for contacting us, will get back to you soon');
        $this->redirect('/contact-us');
    }
    public function render()
    {
        return view('livewire.contact-us');
    }
}
