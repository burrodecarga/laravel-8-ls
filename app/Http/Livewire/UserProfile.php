<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UserProfile extends Component
{



    public $address = '';
    public $phone   = '';
    public $mobile  = '';
    public $cost = 0;
    public $about = '';
    public $availability = '';
    public $birthdate;


    public $title = '';
    public $description = '';
    public $date_begin, $date_end;



    public function render()
    {
        $profile = auth()->user()->profile;
        if ($profile) $this->asignaProfile($profile);
        return view('livewire.user-profile')->layout('layouts.cpp');
    }

    public function asignaProfile($profile)
    {
        $this->address  = $profile->address;
        $this->phone    = $profile->phone;
        $this->mobile    = $profile->mobile;
        $this->birthdate = $profile->birthdate;
        $this->title  = $profile->title;
        $this->cost    = $profile->cost;
        $this->about    = $profile->about;
        $this->availability    = $profile->availability;
    }

    public function personal()
    {
        $rules = [
            'address' => 'string',
            'phone' => 'string',
            'mobile' => 'string',
            'birthdate' => 'date',
            'title' => 'string',
            'cost' => 'numeric',
            'availability' => 'string',
            'about' =>'string',
              ];
        $values = $this->validate($rules);

        $fecha = $values['birthdate'];

        //$this->birthdate = $this->fecha($fecha);

        auth()->user()->profile()->updateOrCreate(
            [
                'user_id' => auth()->user()->id
            ],
            [
                'address' => $values['address'],
                'phone' => $values['phone'],
                'mobile' => $values['mobile'],
                'birthdate' => $values['birthdate'],
                'title' => $values['title'],
                'cost' => $values['cost'],
                'about' => $values['about'],
                'availability' => $values['availability'],
            ]
        );
        auth()->user()->profile->save();

        $this->emit('alert', 'Profile was updated successfully');
        /*  $profile = auth()->user()->profile;
        $this->address  = $profile->address;
        $this->phone    =$profile->phone;
        $this->mobile    =$profile->mobile;
        $this->birthdate =$profile->birthdate; */
    }


    public function fecha($fecha)
    {
        return (Carbon::parse($fecha)->format('d-m-Y'));
    }
}
