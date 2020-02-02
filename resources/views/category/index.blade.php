@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('CategoryController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm </i></a>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Mô tả</th>
              <th>Tên gốc</th>
              <th>Hình ảnh</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td>{{ getNameOfCategoryParent($category) }}</td>
              <td>
                <img src="{{ !empty($category->image) ? url($category->image) : 'NO_IMG' }}" height="100px" width="100px" />
              </td>
              <td>
                <a href="{{  action('CategoryController@edit', $category->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('CategoryController@destroy', $category->id), 'style' => 'display: inline-block;')) }}
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                  <i class="glyphicon glyphicon-trash" style="color: red"> Xóa</i>
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
              <th>Mô tả</th>
              <th>Tên gốc</th>
              <th>Hình ảnh</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop