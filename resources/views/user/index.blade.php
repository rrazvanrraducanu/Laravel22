@extends('user.master')

@section('content')
    <h1>Please sign in</h1>
    <?php echo Form::open(array('action'=>'LoginController@check')) ;?>
<?php echo Form::label('email','Email: ' ) ;?>
<?php echo Form::text('email',null,array('placeholder'=>'Email'));?>
<?php echo $errors->first('email')."<br/><br/>";?>

<?php echo Form::label('password', 'Password: ');?>
<?php echo Form::password('password',null,array('placeholder'=>'password'));?>
<?php echo $errors->first('password') ."<br/><br/>";?>

<?php echo Form::submit('Sign In')."<br/><br/>";?>
<?php echo link_to('register', 'Register');?>
<?php echo Form::close();?>
@endsection
