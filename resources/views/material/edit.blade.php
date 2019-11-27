@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a Material</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('MaterialController@update', $material->id))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('name', $material->name, array('class' => 'form-control')) }}
                <label>Name</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('quantity ', $material->quantity, array('class' => 'form-control')) }}
            <label>Quantity</label>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group">
            <label>Đơn vị(material_type)</label>
          <div class="form-label-group">
            {{ Form::select('material_type_id', getListMaterialType(), $material->material_type_id,array('class' => 'form-control')) }}
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
