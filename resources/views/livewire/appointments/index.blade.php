<div>
   <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Service</th>
            <th>Appointment Schedule</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appt)
        <tr>
            <td>{{$appt->id}}</td>
            <td>{{$appt->fullName}}</td>
            <td>{{$appt->service}}</td>
            <td>{{$appt->schedule}}</td>
            <td>{{$appt->email}}</td>
            <td>{{$appt->contact}}</td>
            <td>
                <a href="{{url('edit', ['appointment' => $appt->id])}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{url('delete', ['appointment' => $appt->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        @endforeach
    </tbody>
   </table>
</div>
