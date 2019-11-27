@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a material type</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('MaterialTypeController@update', $materialType->id))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('name', $materialType->name, array('class' => 'form-control')) }}
                <label>Name</label>
              </div>
            </div>
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
