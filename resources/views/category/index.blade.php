@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.message')
  <div class="row">
    <div class="col-md-6">
      <div class="page-header">
        <h1>Application Categories</h1>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Create At</th>
            <th>Modified At</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->category_name }}</td>
              <td>{{ date('M, d Y H:i:s',strtotime($category->created_at)) }}</td>
              <td>{{ date('M, d Y H:i:s',strtotime($category->updated_at)) }}</td>
              <td><a href="{{ route('application.show',$category->id) }}" class="btn btn-info btn-sm">Modify</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="well well-lg">
          <a href="{{ route('application.create') }}" class="btn btn-success">Create New</a>
      </div>
    </div>
  </div>

</div>
@endsection
