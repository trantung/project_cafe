@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Create a Material</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('MaterialController@store'))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                <label>Name</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('quantity ', null, array('class' => 'form-control')) }}
            <label>Quantity</label>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group">
            <label>Đơn vị(material_type)</label>
          <div class="form-label-group">
            {{ Form::select('material_type_id', getListMaterialType(), array('class' => 'form-control')) }}
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
