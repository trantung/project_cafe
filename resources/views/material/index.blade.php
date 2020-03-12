@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('MaterialController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm </i></a>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Đơn vị(material_type)</th>
              <th>số lượng</th>
              <th>trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $material)
            <tr>
              <td>{{ $material->id }}</td>
              <td>{{ $material->name }}</td>
              <td>{{ getMaterialTypeName($material->material_type_id) }}</td>
              <td>{{ $material->quantity}}</td>
              <td>{{$material->active == '1' ? 'active' : 'no active'}}</td>
              <td>
                <a href="{{  action('MaterialController@edit', $material->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('MaterialController@destroy', $material->id), 'style' => 'display: inline-block;')) }}
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                  <i class="glyphicon glyphicon-trash" style="color:red">xóa</i>
                </a>
                {{ Form::close() }}
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Đơn vị(material_type)</th>
              <th>số lượng</th>
              <th>trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop