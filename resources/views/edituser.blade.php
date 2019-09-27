@extends('layout')

@section('content')

-{{-- @foreach($errors->all() as $error)
                         <li>{{$error}}</li>
                         @endforeach --}}

  <h2>Edit User Form</h2>

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


  <form action="{{URL('/update')}}" method="POST" >
    @csrf
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$userdata['name']}}">
      <?php echo $errors->first('username'); ?>
    </div>

<input type="hidden" name="user_id" value="{{$userdata['id']}}" >


    <div class="form-group">
    <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$userdata['email']}}">
            <?php echo $errors->first('email'); ?>
          </div>

    <div class="form-group">
    <label for="email">Number:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter Number" name="number" value="{{$userdata['number']}}">
          <?php echo $errors->first('number'); ?>

    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="********">
            <?php echo $errors->first('password'); ?>

    </div>

   

    <button type="submit" class="btn btn-default">Update</button>
  </form>

@endsection