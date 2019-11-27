@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    <a href="{{ action('TableController@create') }}">Add</a>
  </div>
  <div>
    <i class="fas fa-table"></i>
    The loai: 1:tron, 2:vuong, 3: chu nhat, 4: hinh khac
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Level</th>
            <th>Max person</th>
            <th>Kick co</th>
            <th>The loai</th>
            <th>Active</th>
            <th>Action</th>
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
                    <i class="btn btn-warning">
                        <a href="{{ action('TableController@edit', $table->id) }}">Edit</a>
                    </i>
                    <i class="glyphicon glyphicon-trash">
                        {{ Form::open(array('method'=>'DELETE', 'action' => array('TableController@destroy', $table->id), 'style' => 'display: inline-block;')) }}
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