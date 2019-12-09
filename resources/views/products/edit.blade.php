@extends('common.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sửa thông tin sản phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" class="from_product">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>duration_time:</label>
                    <input type="text" name="duration_time" value="{{ $product->duration_time }}" class="form-control" placeholder="duration_time">
                    <label>close_time:</label>
                    <input type="time" name="close_time" value="{{ $product->close_time }}" class="form-control" placeholder="close_time">
                    <label>open_time:</label>
                    <input type="time" name="open_time" value="{{ $product->open_time }}" class="form-control" placeholder="open_time">
                    <label>avatar</label>
                    <div class="form-label-group">
                        <input type="file" name="avatar" class="form-control"><br>
                        @if($product->avatar)
                            <img src="{{$product->avatar }}" width="150px" height="auto"  />
                        @endif
                    </div>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">status:</label>
                    <input type="text" name="status" value="{{ $product->status }}" class="form-control" placeholder="status" id="status">
                    <label>weight_number:</label>
                    <input type="number" name="weight_number" value="{{ $product->weight_number }}" class="form-control" placeholder="weight_number" id="weight_number">
                    <label for="description">description:</label>
                    <textarea type="text" name="description" value="{{ $product->description }}" class="form-control" placeholder="Name" id="description" style="height: 48px;" ></textarea>
                    <label for="print_view">print_view:</label>
                    <input type="number" name="print_view" value="{{ $product->print_view }}" class="form-control" placeholder="print_view" id="print_view">
                    <label for="price_origin">price_origin:</label>
                    <input type="text" name="price_origin" class="form-control" placeholder="price_origin">
                </div>
            </div>
            <div class="col-md-4">
                <div class ="form-group">
                    <label for="barcode">barcode:</label>
                    <input type="text" name="barcode" value="{{ $product->barcode }}" class="form-control" placeholder="barcode" id="barcode">
                    <label>code:</label>
                    <input type="number" name="code" value="{{ $product->code }}" class="form-control" placeholder="code" id="code">
                    <label for="price_pay">price_pay:</label>
                    <input type="number" name="price_pay" class="form-control" placeholder="price_pay" id="price_pay">
                    <label for="name">name:</label>
                    <input class="form-control" name="name" placeholder="name" id="name"/>
                    <p class="product_select">
                    <label for="category_id">category_id:</label>
                    {{ Form::select('parent_id', getListCategory(), array('class' => 'form-control custom-select ')) }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
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