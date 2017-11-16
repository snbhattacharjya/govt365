@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.message')
  <div class="row">
    <div class="col-md-10">
      <div class="page-header">
        <h1>Applications <small>Home</small></h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Applicant Name</th>
            <th>Brief History</th>
            <th>Receive Date</th>
            <th>Create At</th>
            <th>Modified At</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($applications as $application)
            <tr>
              <td>{{ $application->id }}</td>
              <td>{{ $application->appl_name }}</td>
              <td>{{ $application->brief_history }}</td>
              <td>{{ date('M, d Y (D)',strtotime($application->receive_date)) }}</td>
              <td>{{ date('M, d Y H:i:s',strtotime($application->created_at)) }}</td>
              <td>{{ date('M, d Y H:i:s',strtotime($application->updated_at)) }}</td>
              <td><a href="{{ route('application.show',$application->id) }}" class="btn btn-info btn-sm">Read More</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-2">
      <div class="well well-lg">
          <a href="{{ route('application.create') }}" class="btn btn-success">Create New</a>
      </div>
    </div>
  </div>

</div>
@endsection
