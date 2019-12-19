@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a table</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('TableController@update', $table->id))) }}
          <div class="form-group">
            <div class="form-group">
              <label>Level(Tang)</label>
            <div class="form-label-group">
              {{ Form::select('level_id', getListLevel(), $table->level_id, array('class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('name', $table->name, array('class' => 'form-control')) }}
                <label>Name</label>
              </div>
            </div>
          </div>

        <div class="form-group">
            <label>QR code: </label>
            {{ $table->qr_code }}
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('code', $table->code, array('class' => 'form-control')) }}
            <label>Code</label>
          </div>
        </div>
        
        <div class="form-group">
            <label>Kích cỡ</label>
          <div class="form-label-group">
            {{ Form::select('size', getSizeDefault(), $table->size, array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <label>Loại bàn</label>
          <div class="form-label-group">
            {{ Form::select('type', getTypeDefault(), $table->type, array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <label>Số lượng người tối đa</label>
          <div class="form-label-group">
            {{ Form::number('max_number_person', $table->max_number_person, array('class' => 'form-control')) }}
          </div>
        </div>

        <div class="form-group">
          <div class="form-group">
            <label>Active</label>
          <div class="form-label-group">
            {{ Form::select('active', getArrayStatus(), $table->active, array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
