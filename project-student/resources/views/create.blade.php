@extends('master')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
</div>
@endif
   <div class="card">
        <div class="card-header">
            Add student
        </div>
        <div class="card-body">
             <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="row mb-3">
                       <label for="name" class="col-sm-2 col-lable-form">Student name</label>
                       <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="">
                       </div>
                   </div>
                   <div class="row mb-3">
                       <label for="email" class="col-sm-2 col-lable-form">Student email</label>
                       <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" id="">
                       </div>
                   </div>
                   <div class="row mb-4">
                       <label for="gender" class="col-sm-2 col-lable-form">Student gender</label>
                       <div class="col-sm-10">
                          <select name="gender" id="" class="form-control">
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                          </select>
                       </div>
                   </div>
                   <!-- <div class="row mb-4">
                       <label for="image" class="col-sm-2 col-lable-form">Student image</label>
                       <div class="col-sm-10">
                          <input type="file" name="image" id="">
                       </div>
                   </div> -->
                   <div class="text-center">
                        <input type="submit" class = "btn btn-primary" value="Add">
                   </div>
             </form>
        </div>
   </div>
@endsection('content')