@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a material type</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('ToppingController@update', $topping->id))) }}
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
        <div class="form-group">
          <div class="col-md-12">
            {{Form::label('category_id', 'Chọn category')}}
            <select multiple="multiple" name="category_id[]" id="category_id" class="form-control">
            @foreach(getListCategory(1) as $categoryId => $categoryName)
              <option value="{{$categoryId}}" @if(in_array($categoryId, $categories))selected="selected"@endif>
                {{$categoryName}}
              </option>
            @endforeach
            </select>

          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
