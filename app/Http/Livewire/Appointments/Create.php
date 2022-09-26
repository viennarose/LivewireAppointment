<?php

namespace App\Http\Livewire\Appointments;

use Livewire\Component;
use App\Models\Appointment;

class Create extends Component
{
    public $fullName, $service, $schedule, $email, $contact;
    public function addAppointment(){
        $this->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'unique:appointments'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'numeric'],
        ]);
        Appointment::create([
            'fullName' => $this->fullName,
            'service' => $this->service,
            'schedule' => $this->schedule,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
        return redirect('/home')->with('message', 'Created Successfully');
    }
    public function updated($propertySchedule)
    {
        $this->validateOnly($propertySchedule, [
            'schedule' => ['required', 'string'],
        ]);
    }
    public function render()
    {
        return view('livewire.appointments.create');
    }
}
