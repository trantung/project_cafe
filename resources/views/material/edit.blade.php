@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Nguyên Vật liệu {{$material->name}} -chỉnh sửa</div>
    <h3>Thông tin chung</h3>
    <hr style="width:100%;height:2px">
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('MaterialController@update', $material->id))) }}
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <label>Tên nguyên vật liệu</label>
              {{ Form::text('name', $material->name, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-label-group">
            <label >mô tả</label>
            <br>
            {!! Form::text('desc', $material->desc, ['class'=>'form-control']) !!}
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-label-group">
              <label>Số lượng</label>
              {{ Form::text('quantity', $material->quantity, array('class' => 'form-control')) }}
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-label-group">
              <label>Đơn vị(material_type)</label>
              {{ Form::select('material_type_id', getListMaterialType(), $material->material_type_id,array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="form-row">
          <h4>Trạng thái đơn vị NVL(<span style="color: red">*</span>)</h4>
          <hr style="width: 100% ; border: 1px solid #493d3d">
          <div>
            <label>Có còn hiệu lực không?</label>
            <input type="radio" id="option1" name="active" value="1" {{ $material->active == '1' ? 'checked' : '' }}>Có</label>
            <input type="radio" id="option2" name="active" value="0" {{ $material->active == '0' ? 'checked' : '' }}>Không</label>
          </div>
        </div>
      </div>
      <button type="reset" class="btn btn-danger" onclick="confirm('Bạn có chắc chẵn muốn hủy bỏ?');  return false;">Hủy bỏ</button>
      {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
