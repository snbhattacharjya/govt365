@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
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
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($applications as $application)
            <tr>
              <td>{{ $application->id }}</td>
              <td>{{ $application->appl_name }}</td>
              <td>{{ $application->brief_history }}</td>
              <td>{{ $application->receive_date }}</td>
              <td><a href="{{ route('application.show',$application->id) }}" class="btn btn-info btn-sm">Read More</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <div class="well well-lg">
          <a href="{{ route('application.create') }}" class="btn btn-success">Create New</a>
      </div>
    </div>
  </div>

</div>
@endsection
