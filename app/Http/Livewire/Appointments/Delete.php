<?php

namespace App\Http\Livewire\Appointments;

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
