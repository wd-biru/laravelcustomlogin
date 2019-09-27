@extends('layout')

@section('content')

  <h2>Vertical (basic) form</h2>
  <form action="login_check" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
    <div class="checkbox">
      <label><input type="checkbox" name="remember" value="true" > Click Me</label>
      <?php echo $errors->first('remember'); ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection