@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="page-header">
        <h1>Applications <small>Home</small></h1>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well well-lg">
          <a href="{{ route('application.create') }}" class="btn btn-success">Create New</a>
          <a href="{{ route('application.search') }}" class="btn btn-primary">Search</a>
      </div>
    </div>
  </div>

</div>
@endsection
