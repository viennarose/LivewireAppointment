<?php

namespace App\Http\Livewire\Appointments;

use Livewire\Component;
use App\Models\Appointment;

class Create extends Component
{
    public $fullName, $service, $appt_date, $appt_time, $email, $contact;
    public function addAppointment(){
        $this->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'appt_date' => ['required', 'date'],
            'appt_time' => ['required', 'string', 'unique:appointments'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'numeric'],
        ]);
        Appointment::create([
            'fullName' => $this->fullName,
            'service' => $this->service,
            'appt_date' => $this->appt_date,
            'appt_time' => $this->appt_time,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
    }
    public function updated($propertyAppt_time)
    {
        $this->validateOnly($propertyAppt_time, [
            'appt_time' => ['required', 'string'],
        ]);
    }
    public function render()
    {
        return view('livewire.appointments.create');
    }
}
