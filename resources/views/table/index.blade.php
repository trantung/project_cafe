@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('TableController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm bàn</i></a>
    </div>
    <div>
      <i class="fa fa-table"></i>
      The loai: 1:tron, 2:vuong, 3: chu nhat, 4: hinh khac
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Level</th>
              <th>Max person</th>
              <th>Kick co</th>
              <th>The loai</th>
              <th>Active</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $table)
            <tr>
              <td>{{ $table->id }}</td>
              <td>{{ $table->name }}</td>
              <td>{{ getNameLevelByTable($table->level_id) }}</td>
              <td>{{ $table->max_number_person }}</td>
              <td>{{ $table->size }}</td>
              <td>{{ $table->type }}</td>
              <td>{{ $table->active }}</td>
              <td>
                <a href="{{  action('TableController@edit', $table->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('TableController@destroy', $table->id), 'style' => 'display: inline-block;')) }}
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
              <th>Name</th>
              <th>Level</th>
              <th>Max person</th>
              <th>Kick co</th>
              <th>The loai</th>
              <th>Active</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop