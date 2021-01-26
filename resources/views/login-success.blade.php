@if(Auth::check())
    <h1>Login successed.</h1>
    @if (isset($user))
        {{"Name: ".$user->name}}
        <br>
        {{"Email: ".$user->email}}
        <br>
        
    @endif
    <form method="post" action="{{ asset('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <h1>Not login.</h1>
@endif

    


