@extends('user.master')

@section('content')
    <h1>Please register</h1>
    <?php echo Form::open(array('action'=>'LoginController@store'));?>

<?php echo Form::label('name','Username: ' ) ;?>
<?php echo Form::text('name',null,array('placeholder'=>'Username'));?>
<?php echo $errors->first('name').”<br/><br/>”;?>

<?php echo Form::label('email','Email: ' );?>
<?php echo Form::text('email',null,array('placeholder'=>'Email'));?>
<?php echo $errors->first('email').”<br/><br/>”;?>

<?php echo Form::label('password', 'Password: ');>
<?php echo Form::password('password',null,array('placeholder'=>'password'));?>
<?php echo $errors->first('password');>.”<br/><br/>”;?>

<?php echo Form::submit('Register');?>
<?php echo Form::close();?>
@endsection
