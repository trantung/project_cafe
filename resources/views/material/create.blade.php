@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Thêm mới nguyên vật liệu</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('MaterialController@store'))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <label>Tên nguyên vật liệu</label>
                {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <label>Mô tả</label>
            <br>
            {{ Form::text('desc', null, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-4">
              <div class="form-label-group">
                <label>Số lượng</label>
                {{ Form::text('quantity', null, array('class' => 'form-control')) }}
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-label-group">
                <label>Đơn vị(material_type)</label>
                {{ Form::select('material_type_id', getListMaterialType(),array('class' => 'form-control')) }}
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <h4>Trạng thái đơn vị NVL(<span style="color: red">*</span>)</h4>
          <hr style="width: 100% ; border: 1px solid #493d3d">
          <div>
            <label>Có còn hiệu lực không?</label>
              <input type="radio"  id="option1" name="active" value="1">Có</label>
              <input type="radio" id="option2" name="active" value="0" >Không</label>
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary pull-right')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
