@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a category</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('CategoryController@update', $category->id))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('name', $category->name, array('class' => 'form-control')) }}
                <label>Category name</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('description', $category->description, array('class' => 'form-control')) }}
            <label>Decription</label>
          </div>
        </div>
        <div class="form-group">
            <label>Parent</label>
         <div class="form-label-group">
            {{ Form::select('parent_id', getListCategory(), $category->parent_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="form-group">
          <label>Image</label>
          <div class="form-label-group">
            <input type="file" name="image" class="form-control"><br>
            @if($category->image)
            <img src="{{$category->image }}" width="150px" height="auto"  />
            @endif
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
