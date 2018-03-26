@extends('user.master')

@section('content')
    <ul>
        @if(Auth::user())
        <li><h1>Welcome to your profile page:  <?php echo $title;?></h1></li>
            <li><?php echo link_to('/logout', 'Logout');?></li>
        @else
            <li><?php link_to('/login', 'Login');?></li>
    @endif
    </ul>
@endsection
