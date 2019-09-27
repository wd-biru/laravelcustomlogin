@extends('layout')

@section('content')

-{{-- @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                         @endforeach --}}

  <h2>Register Form</h2>

@if (Session::has('success'))
<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
{{Session::get('success')}}
</div>
</div>
  </div>
  {{-- expr --}}
@endif


  <form action="register_method" method="post" >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter name" name="username">
      <?php echo $errors->first('username'); ?>
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <?php echo $errors->first('email'); ?>
          </div>

        <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            <?php echo $errors->first('password'); ?>

    </div>

   <div class="form-group">
    <label for="email"> Confirm Password:</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm password" name="cpassword">
            <?php echo $errors->first('cpassword'); ?>

    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember" value="true" > Remember me</label>
      <?php echo $errors->first('remember'); ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

@endsection