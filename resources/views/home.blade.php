@extends('layout')
@section('content')

<div class="container">
	<div class="bb_add_btn" >
	<button class="btn btn-primary btn-sm bb_add_btn " style="padding: 4px 2rem;letter-spacing: 1px;margin-right: 50px;" data-toggle="modal" data-target="#ProfilesModalForm" id="previewModal">
		Add Profile
	</button>
</div>
  <div class="row bb_container">
    <table class="table table-striped table-hover table-condensed">
    
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action </th>
      </tr>
      @foreach($profiless as $profi) 
      <tr>
        <td>{{$profi['id']}}</td>
        <td>{{$profi['name']}}</td>
        <td>{{$profi['email']}}</td>
        <td>
            <a href="{{url('/edit-user/'.$profi['id'])}}"><i class="fa fa-edit bbstyle">&nbspEDIT</i></a>&nbsp&nbsp&nbsp
            <a href="{{url('/delete-user/'.$profi['id'])}}"> <i class="fa fa-trash bbstyle">&nbspDELETE</i></a>
       </td>
      </tr>
      @endforeach
   
  </table>
  </div>
</div>


<div class="modal fade" id="ProfilesModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="text-center">Register Form</h2>
    <form action="" method="POST" enctype="multipart/form-data">
       @csrf
    

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="user_name">
      <span id="user_name_error"></span>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
      <span id="user_email_error"></span>
    </div>

    <div class="form-group">
      <label for="email">Number:</label>
      <input type="test" class="form-control" id="number" placeholder="Enter Your Number" name="user_number">
      <span id="user_number_error"></span>
    </div>
    
    <div class="form-group">
      <label for="email">Somethings </label>
      <input type="test" class="form-control" id="address" placeholder="Enter Your Address" name="user_address">
      <span id="user_address_error"></span>
    </div>

    <div class="bb_btn">
      <button class="btn btn-default text-center " id="add_profile_data">Submit</button>
    </div>
  </form>
      </div>
    </div>
  </div>
</div>

 <!-- Model CODE -->

 
@endsection