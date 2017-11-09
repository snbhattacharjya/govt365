@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-8">
      <div class="page-header">
        <h1>Applications <small>Details</small></h1>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">Applicant: {{ $application->appl_name }}</div>
        <div class="panel-body">
          Brief History: {{ $application->brief_history }}
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
