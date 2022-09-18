@extends('navbar')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-4">
            @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif


            <livewire:appointments.create/>
        </div>
        <div class="col-lg-8">
            <livewire:appointments.index/>
        </div>
    </div>

</div>
@endsection
