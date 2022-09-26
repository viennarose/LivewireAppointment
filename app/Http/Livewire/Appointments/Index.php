<?php

namespace App\Http\Livewire\Appointments;

use Livewire\Component;
use App\Models\Appointment;

class Index extends Component
{
    public function loadAppointments(){
        $appointments = Appointment::orderBy('fullName')->get();

        return compact('appointments');
    }
    public function render()
    {
        return view('livewire.appointments.index', $this->loadAppointments());
    }
}
