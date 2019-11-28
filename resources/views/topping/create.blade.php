@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Create a topping</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('ToppingController@store'))) }}
        <div class="form-group">
          <label>Name</label>
          <div class="col-md-6">
            <div class="form-label-group">
              {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label>Price</label>
            <div class="form-label-group">
              {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            {{Form::label('category_id', 'Chọn category')}}
            {{Form::select('category_id[]', getListCategory(1), null, array('multiple'=>'multiple','name'=>'category_id[]', 'class' => 'form-control',))}}
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
