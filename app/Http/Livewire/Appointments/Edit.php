<?php

namespace App\Http\Livewire\Appointments;

use Livewire\Component;
use App\Models\Appointment;

class Edit extends Component
{
    public $appointmentId;
    public $fullName, $service, $schedule, $email, $contact;

    public function mount(){
        $this->fullName = $this->appointment->fullName;
        $this->service = $this->appointment->service;
        $this->schedule = $this->appointment->schedule;
        $this->email = $this->appointment->email;
        $this->contact = $this->appointment->contact;
    }
    public function editAppointment(){
        $this->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'schedule' => ['required', 'string', 'unique:appointments,schedule,'.$this->appointment->id],
            'email' => ['required', 'email'],
            'contact' => ['required', 'numeric'],

        ]);
        $this->appointment->update([
            'fullName' => $this->fullName,
            'service' => $this->service,
            'schedule' => $this->schedule,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
        return redirect('/home')->with('message', 'Updated Successfully');
    }
    public function getAppointmentProperty(){
        return Appointment::find($this->appointmentId);
    }
    public function render()
    {
        return view('livewire.appointments.edit');
    }
}
