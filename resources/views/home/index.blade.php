@extends('user.master')

@section('content')
    <h1>Hurray!!! This is the index page!</h1>
    <br/><br/>
    <?php echo link_to('/login', 'Login');?>
    <br/><br/>
    <?php echo link_to('/register', 'Register');?>
@endsection
