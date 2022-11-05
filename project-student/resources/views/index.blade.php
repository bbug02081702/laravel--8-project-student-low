@extends('master')
@section('content')
@if($message = Session::get('success'))
   <div class="alert alert-success">
       {{$message}}
   </div> 
@endif
   <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <b>Student data</b>
                </div>
                <div class="col col-md-6">
                     <a href="{{route('students.create')}}" class="btn btn-success btn-sm float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                   <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Gender</th>
                       <th>Action</th>
                   </tr>
                   <tr>
                @if(count($data) > 0)
                    @foreach($data as $st)
                    <td><img src="{{asset('/images/' .$st->Image)}}" width= "75" alt=""></td>
                    <td>{{$st->name}}</td>
                    <td>{{$st->email}}</td>
                    <td>{{$st->gender}}</td>
                    <td>
                        <form action="{{route('students.destroy',$st->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('students.show', $st->id)}}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{route('students.edit', $st->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                   </tr>
                   @endforeach
                @else
                   <tr>
                    <td colspan="5" class="text-center">No data found</td>
                   </tr>
                @endif
            </table>
            {!! $data->links() !!}
        </div>
   </div>
@endsection