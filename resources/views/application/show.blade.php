@extends('layouts.app')

@section('content')
<div class="container">
@include('layouts.message')
  <div class="row">
    <div class="col-md-8">
      <div class="page-header">
        <h1>Applications <small>Details</small></h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading">Applicant:</h4>
          <p class="list-group-item-text">{{$application->appl_name}}</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Brief History:</h4>
          <p class="list-group-item-text">{{$application->brief_history}}</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Comment:</h4>
          <p class="list-group-item-text">{{$application->comment}}</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Receive Date:</h4>
          <p class="list-group-item-text">{{date('d/m/Y',strtotime($application->receive_date))}}</p>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="well">
        <div class="row">
          <div class="col-md-6"><a href="{{ route('application.edit',$application) }}" class="btn btn-warning btn-right">Edit</a></div>
          <div class="col-md-6">
            <form method="POST" action="{{ route('application.destroy',$application) }}">
              {{ csrf_field() }} {{method_field('DELETE')}}
              <button type="submit" class="btn btn-danger btn-right">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
