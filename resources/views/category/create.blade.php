@extends('common.default')
@section('content')
<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Register a category</div>
    <div class="card-body">
      {{ Form::open(array('action' => array('CategoryController@store'), 'method' => "POST", 'files' => true)) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" name="name" class="form-control" autofocus="autofocus">
                <label>Category name</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="description" class="form-control">
            <label>Decription</label>
          </div>
        </div>
        <div class="form-group">
          <label>Parent</label>
          <div class="form-label-group">
            {{ Form::select('parent_id', getListCategory(), array('class' => 'form-control')) }}
          </div>
        </div>

        <div class="form-group">
          <label>Image</label>
          <div class="form-label-group">
            <input type="file" name="image" class="form-control"><br>
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>


<!--     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
@stop
