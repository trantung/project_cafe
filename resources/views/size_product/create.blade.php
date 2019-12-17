@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">
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
</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('Product_sizeController@store'))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Giá</label>
                    {{ Form::text('price', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    <label>active</label>
                    {{ Form::select('active', [1 => 'Active', 0 => 'Inactive'], array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>weight_number</label>
                    {{ Form::number('weight_number', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    <label>product_id</label>
                    {{ Form::select('product_id', getListProduct(), array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    <label>size_id</label>
                    {{ Form::select('size_id', getListSizeProduct(), array('class' => 'form-control')) }}
                </div>
            </div>
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary text-center')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>
@endsection