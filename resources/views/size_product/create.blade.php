@extends('common.default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Thêm mới sản phẩm</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('size_product.index') }}"><i class="fas fa-backward"></i> Back</a>
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

{{ Form::open(array('action' => array('Product_sizeController@store'), 'method' => "POST" )) }}
    @csrf
    <div class="row">
        <div class="form-group">
            <label for="duration_time">weight_number:</label>
            <input type="number" name="weight_number" class="form-control" placeholder="weight_number" id="weight_number">
            <label for="product_id">product_id:</label>
            {{ Form::select('product_id', getListSizeProduct(), array('class' => 'form-control')) }}</p>
            <label for="size_id">size_id:</label>
            {{ Form::select('size_id', getList(), array('class' => 'form-control')) }}</p>
            <label for="active">active:</label>
            <input type="text" name="active" class="form-control" placeholder="active" id="active">
            <label for="price">price:</label>
            <input type='text' id="price" name="price"  />
            
        </div>
        
    </div>
{{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block ')) }}
@endsection