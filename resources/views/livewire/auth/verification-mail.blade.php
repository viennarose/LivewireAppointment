<div>
    <p>Hello! {{$user->name}}!</p>

    <p>Thanks for checking your email. Please click on the verification link below to log in.</p>

    <p>
        <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">click here</a>
    </p>
</div>
