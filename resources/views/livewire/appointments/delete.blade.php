<div>
    <div class="col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-danger">
                    Delete Apppointment?
                </h3>

            </div>
            <div class="card-body">
                <table class="table">
                <tr>
                    <th>Full Name</th>
                    <td>{{$this->appointment->fullName}}</td>
                </tr>
                <tr>
                    <th>Service</th>
                    <td>{{$this->appointment->service}}</td>
                </tr>
                <tr>
                    <th>Appointment Schedule</th>
                    <td>{{$this->appointment->schedule}}</td>
                </tr>
            </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="delete()">
                        Delete
                    </button>
                    <button class="btn btn-secondary mx-3" wire:click="back()">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
