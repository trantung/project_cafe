@extends('common.default')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            Config nguyên liệu cho
            <br/>
            product_id: {{ $sizeProductMaterial->product_id }}, product_name: {{ getNameProductById($sizeProductMaterial->product_id) }}
            <br/>
            size_id: {{ $sizeProductMaterial->size_id }}, size_name: {{ getNameSizeById($sizeProductMaterial->size_id) }}
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ action('SizeProductMaterialController@list', $sizeProductMaterial->size_product_id) }}">Back</a>
          </div>
      </div>
  </div>
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">
      Config
    </div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('SizeProductMaterialController@update', $sizeProductMaterial->size_product_id, $sizeProductMaterial->id))) }}
        <div class="form-group">
          <div class="col-md-12">
            <label>Nguyên liệu</label>
            {{ Form::select('material_id', getListMaterail(), $sizeProductMaterial->material_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label>Số lượng</label>
            {{ Form::text('quantity',$sizeProductMaterial->quantity , array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
