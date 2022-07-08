<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;


    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ];


    public function render()
    {
        return view('livewire.contact');
    }

    public function submitContact(){
        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        return $this->redirect('/',200);
    }
}
