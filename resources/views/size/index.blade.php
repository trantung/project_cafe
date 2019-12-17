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
      <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
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
                    <i class="btn btn-info">
                    <a href="{{ action('Product_sizeController@size',$size->id) }}"><i class="fa fa-info" style="color:#8BC34A"> Xem</i></a>
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
<script src="{{url('js/site.js')}}"></script>

@stop