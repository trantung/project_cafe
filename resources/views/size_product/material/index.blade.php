@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    <a href="{{ action('SizeProductMaterialController@create', $sizeProduct->id) }}">
      Add nguyên liệu</a>
      <br/>
      product_id: {{ $sizeProduct->product_id }}, product_name: {{ getNameProductById($sizeProduct->product_id) }}
      <br/>
      size_id: {{ $sizeProduct->size_id }}, size_name: {{ getNameSizeById($sizeProduct->size_id) }}
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>material_id</th>
            <th>Tên nguyên liệu</th>
            <th>material_type_id</th>
            <th>Đơn vị tính</th>
            <th>Số lượng</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $sizeProductMaterial)
          <tr>
            <td>{{ $sizeProductMaterial->id }}</td>
            <td>{{ $sizeProductMaterial->material_id }}</td>
            <td>{{ getFieldNameMaterial($sizeProductMaterial->material_id, 'name') }}</td>
            <td>{{ getFieldNameMaterial($sizeProductMaterial->material_id, 'material_type_id') }}</td>
            <td>{{ getMaterialTypeName(getFieldNameMaterial($sizeProductMaterial->material_id, 'material_type_id')) }}</td>
            <td>{{ $sizeProductMaterial->quantity }}</td>
            <td>
              <i class="btn btn-warning">
                  <a href="{{ action('SizeProductMaterialController@edit', array($sizeProduct->id, $sizeProductMaterial->id)) }}">Edit</a>
              </i>
              <i class="glyphicon glyphicon-trash">
                  {{ Form::open(array('method'=>'POST', 'action' => array('SizeProductMaterialController@destroy', $sizeProduct->id, $sizeProductMaterial->id), 'style' => 'display: inline-block;')) }}
                      <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          Delete
                      </button>
                  {{ Form::close() }}
              </i>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

@stop