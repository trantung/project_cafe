@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Thêm size</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('SizeController@store'))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <label>Name</label>
                {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-label-group">
                <label>Mô tả</label>
                {{ Form::text('desc', null, array('class' => 'form-control')) }}
              </div>
            </div>
          </div>
          <div class="form-row">
          <h4>Trạng thái size(<span style="color: red">*</span>)</h4>
          <hr style="width: 100% ; border: 1px solid #493d3d">
          <div>
            <label>Có còn hiệu lực không?</label>
            <input type="radio" id="option1" name="status" value="1" >Có</label>
            <input type="radio" id="option2" name="status" value="0" >Không</label>
          </div>
        </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
