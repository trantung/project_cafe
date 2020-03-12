@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Size {{$size->name}} - chỉnh sửa</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('SizeController@update', $size->id))) }}
      <h4>Thông tin chung</h4>
      <hr style="line-height: 0.1">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <label>Tên size</label>
              {{ Form::text('name', $size->name, array('class' => 'form-control')) }}
            </div>
          </div>
          
        </div>
        <div class="form-row">
          <div class="col-md-12">
            <div class="form-label-group">
              <label>Mô tả</label>
              {{ Form::textarea('desc', $size->desc, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="form-row">
          <h4>Trạng thái size(<span style="color: red">*</span>)</h4>
          <hr style="width: 100% ; border: 1px solid #493d3d">
          <div>
            <label>Có còn hiệu lực không?</label>
            <input type="radio" id="option1" name="status" value="1" {{ $size->status == '1' ? 'checked' : '' }}>Có</label>
            <input type="radio" id="option2" name="status" value="0" {{ $size->status == '0' ? 'checked' : '' }}>Không</label>
          </div>
        </div>
      </div>
      {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop