<?php

namespace App\Http\Livewire\Appointments;

use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $service="all";
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function loadAppointments(){
        $query = Appointment::orderBy('fullName')
            ->search($this->search);

        if($this->service != 'all'){
            $query->where('service', $this->service);
        }

        $appointments = $query->paginate(5);
        return compact('appointments');
    }


    public function render()
    {
        return view('livewire.appointments.index', $this->loadAppointments());
    }
}
