@extends('layouts.app')

@section('content')
<div class="container">
  @include('layouts.message')
  <div class="row">
    <div class="col-md-6">
      <div class="page-header">
        <h1>Application Categories</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
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
              <td><a href="{{ route('category.edit',$category->id) }}" class="btn btn-info btn-sm">Modify</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="well well-lg">
        <form class="form-horizontal" method="POST" action="{{ route('category.store') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('appl_name') ? ' has-error' : '' }}">
                <label for="category_name" class="col-md-4 control-label">Category Name: </label>
                <div class="col-md-4">
                  <input id="category_name" type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" required autofocus>

                  @if ($errors->has('category_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('category_name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="col-md-4">
                  <button type="submit" class="btn btn-success btn-block">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create New
                  </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
