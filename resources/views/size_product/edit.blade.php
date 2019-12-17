@extends('common.default')
@section('content')
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Thông tin chỉnh sửa</div>
   
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('Product_sizeController@update', $size_product->id))) }}
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>weight_number</label>
                    {{ Form::number('weight_number', $size_product->weight_number, array('class' => 'form-control')) }}
                    <label>price</label>
                    {{ Form::text('price', $size_product->price, array('class' => 'form-control')) }}
                    <label>active</label>
                    {{ Form::select('active', [1 => 'Active', 0 => 'Inactive'], $size_product->active, array('class' => 'form-control')) }}
                   
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group">
                    <label>product_id:</label>
                    {{ Form::select('product_id', getListProduct(), array('class' => 'form-control  ')) }}
                    <br>
                    <label>size_id:</label>
                    {{ Form::select('size_id', getListSizeProduct(), array('class' => 'form-control  ')) }}
                </div>
            </div>
            <div class="row" style="margin: 0 auto;display: flex;">
                <div class="pull-left" style="margin: 0 5px;">
                    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} 
                </div>
                <div class="pull-right" style="margin: 0 5px;">
                    <a class="btn btn-danger" href="{{ route('size_product.index') }}"><i class="fas fa-backward"></i> Back</a>
                </div>
            </div>
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
<!-- /*duration_time varchar(255) 
close_time time 
open_time time 
status int(11) 
avatar varchar(255) 
weight_number int(11) 
description text 
print_view int(11) 
barcode varchar(255) 
code varchar(255) 
price_pay int(11) 
price_origin int(11) 
name varchar(255) 
category_id int(11) 
created_at timestamp 
updated_at timestamp 
deleted_at*/ -->