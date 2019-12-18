@extends('common.default')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            Config nguyên liệu cho
            <br/>
            product_id: {{ $sizeProduct->product_id }}, product_name: {{ getNameProductById($sizeProduct->product_id) }}
            <br/>
            size_id: {{ $sizeProduct->size_id }}, size_name: {{ getNameSizeById($sizeProduct->size_id) }}
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ action('SizeProductMaterialController@list', $sizeProduct->id) }}">Back</a>
          </div>
      </div>
  </div>
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">
      Config
    </div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('SizeProductMaterialController@store', $sizeProduct->id))) }}
        <div class="form-group">
          <div class="col-md-12">
            <label>Nguyên liệu</label>
            {{ Form::select('material_id', getListMaterail(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label>Số lượng</label>
            {{ Form::text('quantity',null , array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
