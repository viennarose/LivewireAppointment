<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Online Appointment</title>
    @livewireStyles
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <livewire:appointments.create/>
            </div>
        </div>
    </div>


    @livewireScripts
</body>
</html>
