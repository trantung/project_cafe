@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Create a table</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('TableController@store'))) }}
          <div class="form-group">
            <div class="form-group">
              <label>Level(Tang)</label>
            <div class="form-label-group">
              {{ Form::select('level_id', getListLevel(), array('class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              {{ Form::text('name', null, array('class' => 'form-control')) }}
              <label>Name</label>
            </div>
          </div>

        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('qr_code', null, array('class' => 'form-control')) }}
            <label>QR code</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('code', null, array('class' => 'form-control')) }}
            <label>Code</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('size', null, array('class' => 'form-control')) }}
            <label>Size</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('type', null, array('class' => 'form-control')) }}
            <label>Type</label>
          </div>
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('max_number_person', null, array('class' => 'form-control')) }}
            <label>Max number person</label>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group">
            <label>Active</label>
          <div class="form-label-group">
            {{ Form::select('active', [1 => 'Active', 0 => 'Inactive'], array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
