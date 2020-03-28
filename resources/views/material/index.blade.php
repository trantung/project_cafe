@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('MaterialController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm </i></a>
    </div>
    <div class="body " >
    <a href="#demo1" data-toggle="collapse"><i class ="fa fa-minus"></i></a>
      <div class="table-responsive" id ="demo1">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom" id = >
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
                <form action="{{ route('material.destroy', $material->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn" type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                  <i class="glyphicon glyphicon-trash" style="color: red">Xóa</i>
                </a></button>
                </form>
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