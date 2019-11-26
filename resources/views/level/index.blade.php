@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    <a href="{{ action('LevelController@create') }}">Add</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Level</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach($data as $level)
            <tr>
                <td>{{ $level->id }}</td>
                <td>{{ $level->name }}</td>
                <td>{{ $level->description }}</td>
                <td>
                    <i class="btn btn-warning">
                        <a href="{{ action('LevelController@edit', $level->id) }}">Edit</a>
                    </i>
                    <i class="glyphicon glyphicon-trash">
                        {{ Form::open(array('method'=>'DELETE', 'action' => array('LevelController@destroy', $level->id), 'style' => 'display: inline-block;')) }}
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