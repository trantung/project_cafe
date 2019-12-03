@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    <a href="{{ action('SizeController@create') }}">Create Size</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach($data as $size)
            <tr>
                <td>{{ $size->id }}</td>
                <td>{{ $size->name }}</td>
                <td>
                    <i class="btn btn-warning">
                        <a href="{{ action('SizeController@edit', $size->id) }}">Edit</a>
                    </i>
                    <i class="glyphicon glyphicon-trash">
                        {{ Form::open(array('method'=>'DELETE', 'action' => array('SizeController@destroy', $size->id), 'style' => 'display: inline-block;')) }}
                            <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                Delete
                            </button>
                        {{ Form::close() }}
                    </i>

                   <a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true" style="color:#8BC34A" title="Chi tiết">Xem</span></a>
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