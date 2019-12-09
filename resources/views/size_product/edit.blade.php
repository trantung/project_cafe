@extends('common.default')
@section('content')
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Thông tin chỉnh sửa</div>
   
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT','files' => true, 'action' => array('ProductController@update', $product->id))) }}
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>duration_time</label>
                    {{ Form::text('duration_time', $product->duration_time, array('class' => 'form-control')) }}
                    <label>close_time</label>
                    {{ Form::time('close_time', $product->close_time, array('class' => 'form-control')) }}
                    <label>open_time</label>
                    {{ Form::time('open_time', $product->open_time, array('class' => 'form-control')) }}
                    <label>status</label>
                    {{ Form::text('status', $product->status, array('class' => 'form-control')) }}
                    <label>avatar</label>
                    <input type="file" name="avatar" class="form-control"><br>
                    @if($product->avatar)
                        <img src="{{$product->avatar }}" width="150px" height="auto"  />
                    @endif
                    <br>
                    <label>weight_number</label>
                    {{ Form::number('weight_number', $product->weight_number, array('class' => 'form-control')) }}
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>description</label>
                    {{ Form::text('description', $product->description, array('class' => 'form-control')) }}
                    <label>print_view</label>
                    {{ Form::number('print_view', $product->print_view, array('class' => 'form-control')) }}
                    <label>code</label>
                    {{ Form::text('code', $product->code, array('class' => 'form-control')) }}
                    <label>price_pay</label>
                    {{ Form::number('price_pay', $product->price_pay, array('class' => 'form-control')) }}
                    <label>price_origin</label>
                    {{ Form::number('price_origin', $product->price_origin, array('class' => 'form-control')) }}
                    <label>name</label>
                    {{ Form::text('name', $product->name, array('class' => 'form-control')) }}
                    <label>category_id:</label>
                 {{ Form::select('category_id', getListCategory(), array('class' => 'form-control custom-select ')) }}
                </div>
            </div> 
            <div class="row" style="margin: 0 auto;display: flex;">
                <div class="pull-left" style="margin: 0 5px;">
                    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }} 
                </div>
                <div class="pull-right" style="margin: 0 5px;">
                    <a class="btn btn-danger" href="{{ route('products.index') }}"><i class="fas fa-backward"></i> Back</a>
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