@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('LevelController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm tầng</i></a>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
            <th>Id</th>
            <th>Tầng</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $level)
            <tr>
              <td>{{ $level->id }}</td>
              <td>{{ $level->name }}</td>
              <td>{{ $level->description }}</td>
              <td>
                <a href="{{ action('LevelController@edit', $level->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('LevelController@destroy', $level->id), 'style' => 'display: inline-block;')) }}
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
              <th>Tầng</th>
              <th>Mô tả</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop