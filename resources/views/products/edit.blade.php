@extends('common.default')
@section('content')
<style>
    img{
        width: 100px;
        height: 100px;
    }
</style>
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
                        <label>Tên sản phẩm</label>
                        {{ Form::text('name', $product->name, array('class' => 'form-control')) }}
                        <label>Thể loại:</label>
                        {{ Form::select('category_id',getListCategory(),'',array('class' => 'form-control'),) }}
                    </div>
                </div>  
            </div>
            <div class="row">
                <form enctype="multipart/form-data" method="post">
                    <input id="image-upload" name="image_upload[]" type="file"  multiple/>
                    <input class="update btn btn-purple" type="button" value="Upload Gallery" />
                </form>
            </div>
            <br>
            <div class="row">
                <table class="table">
                    <div id="images-to-upload">
                    </div>
                </table>
            </div>
            <br>
            <hr>
            <div class="row">
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
