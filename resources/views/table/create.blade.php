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
          <label>Name</label>
          <div class="form-label-group">
            {{ Form::text('name', null, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <label>Code</label>
          <div class="form-label-group">
            {{ Form::text('code', null, array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <label>Kích cỡ</label>
          <div class="form-label-group">
            {{ Form::select('size', getSizeDefault(), array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <label>Loại bàn</label>
          <div class="form-label-group">
            {{ Form::select('type', getTypeDefault(), array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <label>Số lượng người tối đa</label>
          <div class="form-label-group">
            {{ Form::text('max_number_person', null, array('class' => 'form-control')) }}
          </div>
        </div>

        <div class="form-group">
          <div class="form-group">
            <label>Active</label>
          <div class="form-label-group">
            {{ Form::select('active', getArrayStatus(), array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
