<div>
    <div class="card bg-dark">
        <div class="card-header bg-light">
            <h3 class="text-center">Set Appointment</h3>
        </div>
        <div class="card-body">
                <div class="form-floating mb-4">
                    <input type="text" name="fullName" placeholder="First, Middle, Last" class="form-control" wire:model.defer="fullName">
                    <label for="fullName">Full Name</label>
                    @error('fullName')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <select class="form-select" name="service" wire:model.defer="service">
                        <option selected>Select service</option>
                        <option value="Dental Cleaning">Dental Cleaning</option>
                        <option value="Tooth Extraction">Tooth Extraction</option>
                        <option value="Dental Check-up">Dental Check-up</option>
                        <option value="Braces">Braces</option>
                        <option value="Others">Others</option>
                      </select>
                    <label for="service">Appointment Purpose</label>
                    @error('service')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-floating mb-4">
                    <input type="datetime-local" name="appt_date" class="form-control" wire:model.defer="schedule">
                    <label for="appt_date">Appointment Schedule</label>
                    @error('schedule')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" placeholder="example@email.com" wire:model.defer="email">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-floating mb-4">

                    <input type="number" name="contact" class="form-control" placeholder="00000000" wire:model.defer="contact">
                    <label for="contact">Contact No.</label>
                     @error('contact')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <button class="btn btn-primary mt-3" type="submit" wire:click="addAppointment()">Add appointment</button>
        </div>
    </div>
</div>
