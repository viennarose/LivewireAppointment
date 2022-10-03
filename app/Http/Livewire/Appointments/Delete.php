<?php

namespace App\Http\Livewire\Appointments;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Appointment;

class Delete extends Component
{
    public $appointmentId;
    public function getAppointmentProperty(){
        return Appointment::find($this->appointmentId);
    }

    public function delete(){
        $this->appointment->delete();

        $log_entry = 'Deleted appointment "' . $this->appointment->fullName . '" with the ID# of ' . $this->appointment->id;
        event(new UserLog($log_entry));
        return redirect('/home')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/home');
    }
    public function render()
    {
        return view('livewire.appointments.delete');
    }
}
