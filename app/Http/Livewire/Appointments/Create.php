<?php

namespace App\Http\Livewire\Appointments;

use App\Events\UserLog;
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
        $appointment = Appointment::create([
            'fullName' => $this->fullName,
            'service' => $this->service,
            'schedule' => $this->schedule,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);

        $log_entry = 'Added a new appointment "' . $appointment->fullName . '" with the ID# of ' . $appointment->id . '" having  service of ' . $appointment->service;
        event(new UserLog($log_entry));

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
