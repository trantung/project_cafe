@extends('common.default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Thêm mới sản phẩm</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fas fa-backward"></i> Back</a>
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

{{ Form::open(array('action' => array('ProductController@store'), 'method' => "POST", 'multiple'=>true,'files' => true , 'class'=>'form-product','id'=>'upload')) }}
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="duration_time">duration_time:</label>
                <input type="text" name="duration_time" class="form-control" placeholder="duration_time" id="duration_time">
                <label for="close_time">close_time:</label>
                <input type="time" name="close_time" class="form-control" id="close_time">
                <label for="open_time">open_time:</label>
                <input type="time" name="open_time" class="form-control" id="open_time">
                <label for="status">status:</label>
                <input type="text" name="status" class="form-control" placeholder="status" id="status">
                <label for="avatar">avatar:</label>
                <input type='file' id="avatar" name="avatar" accept=".png, .jpg, .jpeg" />
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="weight_number">weight_number:</label>
                <input type="number" name="weight_number" class="form-control" placeholder="weight_number">
                <label for="detdescriptionail">detdescriptionail:</label>
                <textarea class="form-control" style="height:48px" name="detdescriptionail" placeholder="description"></textarea>
                <label for="print_view">print_view:</label>
                <input type="number" name="print_view" class="form-control" placeholder="print_view">
                <div class="form-group">
                    <label for="images">Image </label>
                    <input type="file" name="images" multiple id="images">
                </div>  
            </div>
        </div>
        <div class="col-md-4 col">
            <div class="form-group">
                <label for="code">code:</label>
                <input type="text" name="code" class="form-control" placeholder="code" id="code">
                <label for="price_pay">price_pay:</label>
                <input type="number" name="price_pay" class="form-control" placeholder="price_pay" id="price_pay">
                <label for="price_origin">price_origin:</label>
                <input type="text" name="price_origin" class="form-control" placeholder="price_origin">
                <label for="name">name:</label>
                <input class="form-control" name="name" placeholder="name" id="name"/>
                <p class="product_select"><label for="category_id">category_id:</label>
                {{ Form::select('category_id', getListCategory(), array('class' => 'form-control')) }}</p>
            </div>
        </div>
    </div>
{{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block product_submit','id'=>'uploadImage')) }}
@endsection