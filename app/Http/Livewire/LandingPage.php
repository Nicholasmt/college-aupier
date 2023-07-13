<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LandingPage extends Component
{

    public $first_name,$last_name,$email,$phone,$country,$student_full_name,$current_year,$graduation_year,$about_student,$service_needed,$when_to_start,$terms_and_conditions,$hear_about_us;
    protected $rules=[
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'email'=>'required',
                    'phone'=>'required',
                    'country'=>'required',
                    'student_full_name'=>'required',
                    'current_year'=>'required',
                    'graduation_year'=>'required',
                    'about_student'=>'required',
                    'service_needed'=>'required',
                    'when_to_start'=>'required',
                    'terms_and_conditions'=>'required',
                    'hear_about_us'=>'required'
                    ];

    public function render()
    {
        return view('livewire.landing-page');
    }
  
    public function book_consultation()
    {
        $this->validate();
        session()->flash('message','Coming Soon!');
        $this->reset();
    }
}
