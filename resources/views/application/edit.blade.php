@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="page-header">
        <h1>Applications <small>Modify Details</small></h1>
      </div>
      
      <form class="form-horizontal" method="POST" action="{{ route('application.update',$application) }}">
          {{ csrf_field() }}{{ method_field('PUT') }}
          <div class="row">
            <div class="col-md-6">

              <div class="form-group{{ $errors->has('appl_name') ? ' has-error' : '' }}">
                  <label for="appl_name" class="col-md-4 control-label">Applicant Name</label>

                  <div class="col-md-8">
                      <input id="appl_name" type="text" class="form-control" name="appl_name" value="{{ $application->appl_name }}" required autofocus>

                      @if ($errors->has('appl_name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('appl_name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                  <label for="mobile" class="col-md-4 control-label">Mobile No</label>

                  <div class="col-md-8">
                      <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $application->mobile }}" required>

                      @if ($errors->has('mobile'))
                          <span class="help-block">
                              <strong>{{ $errors->first('mobile') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('plot_no') ? ' has-error' : '' }}">
                  <label for="plot_no" class="col-md-4 control-label">Plot No</label>

                  <div class="col-md-8">
                      <input id="plot_no" type="text" class="form-control" name="plot_no" value="{{ $application->plot_no }}" required>

                      @if ($errors->has('plot_no'))
                          <span class="help-block">
                              <strong>{{ $errors->first('plot_no') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('khatiyan_no') ? ' has-error' : '' }}">
                  <label for="khatiyan_no" class="col-md-4 control-label">Khatiyan No</label>

                  <div class="col-md-8">
                      <input id="khatiyan_no" type="text" class="form-control" name="khatiyan_no" value="{{ $application->khatiyan_no }}" required>

                      @if ($errors->has('khatiyan_no'))
                          <span class="help-block">
                              <strong>{{ $errors->first('khatiyan_no') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

            </div>


            <div class="col-md-6">

              <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                  <label for="state" class="col-md-4 control-label">State</label>

                  <div class="col-md-8">
                      <select id="state" class="form-control" name="state" required autofocus>
                        <option value="19">West Bengal</option>
                      </select>

                      @if ($errors->has('state'))
                          <span class="help-block">
                              <strong>{{ $errors->first('state') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                  <label for="district" class="col-md-4 control-label">District</label>

                  <div class="col-md-8">
                    <select id="district" class="form-control" name="district" required autofocus>
                      <option value="338">Hooghly</option>
                    </select>

                      @if ($errors->has('mobile'))
                          <span class="help-block">
                              <strong>{{ $errors->first('mobile') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('subdivision') ? ' has-error' : '' }}">
                  <label for="subdivision" class="col-md-4 control-label">Subdivision</label>

                  <div class="col-md-8">
                    <select id="subdivision" class="form-control" name="subdivision" required autofocus>
                      <option value="3384">Arambagh</option>
                    </select>

                      @if ($errors->has('subdivision'))
                          <span class="help-block">
                              <strong>{{ $errors->first('subdivision') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('block') ? ' has-error' : '' }}">
                  <label for="block" class="col-md-4 control-label">Block</label>

                  <div class="col-md-8">
                    <select id="block" class="form-control" name="block" required autofocus>
                      <option value="02338">Goghat-1</option>
                    </select>

                      @if ($errors->has('block'))
                          <span class="help-block">
                              <strong>{{ $errors->first('block') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group{{ $errors->has('brief_history') ? ' has-error' : '' }}">
                  <label for="Brief History" class="col-md-4 control-label">Brief History</label>

                  <div class="col-md-8">
                      <textarea id="brief_history" type="text" class="form-control" name="brief_history" required>{{ $application->brief_history }}</textarea>

                      @if ($errors->has('brief_history'))
                          <span class="help-block">
                              <strong>{{ $errors->first('brief_history') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                  <label for="comment" class="col-md-4 control-label">Comment</label>

                  <div class="col-md-8">
                      <textarea id="comment" type="text" class="form-control" name="comment" required>{{ $application->comment }}</textarea>

                      @if ($errors->has('comment'))
                          <span class="help-block">
                              <strong>{{ $errors->first('comment') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
            </div>

          </div>

          <div class="row">

            <div class="col-md-6">
              <div class="form-group{{ $errors->has('appl_category') ? ' has-error' : '' }}">
                  <label for="Application Category" class="col-md-4 control-label">Application Category</label>

                  <div class="col-md-8">
                    <select id="appl_category" class="form-control" name="appl_category" required autofocus>
                      <option value="1">ROR Correction</option>
                    </select>

                      @if ($errors->has('appl_category'))
                          <span class="help-block">
                              <strong>{{ $errors->first('appl_category') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
            </div>

              <div class="col-md-6">
                <div class="form-group{{ $errors->has('receive_date') ? ' has-error' : '' }}">
                    <label for="Brief History" class="col-md-4 control-label">Receive Date</label>

                    <div class="col-md-8">
                        <input id="receive_date" type="text" class="form-control" name="receive_date" value="{{ date('d/m/Y',strtotime($application->receive_date)) }}" required autofocus>

                        @if ($errors->has('receive_date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('receive_date') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Update
                </button>
              </div>
            </div>
          </div>

      </form>
    </div>
  </div>

</div>
@endsection
