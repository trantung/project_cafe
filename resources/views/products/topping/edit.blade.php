@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit topping product_id = {{$productId}}</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('ProductToppingController@update', $productId, $productTopping->id))) }}
        <div class="form-group">
          <div class="col-md-12">
            <label>Name</label>
            {{ Form::text('name', $topping->name, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label>Price</label>
            {{ Form::text('price', $topping->price, array('class' => 'form-control')) }}
          </div>
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
