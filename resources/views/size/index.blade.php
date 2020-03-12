@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('SizeController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm size</i></a>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Trạng thái</th>
              <th colspan="2">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $size)
            <tr>
              <td>{{ $size->id }}</td>
              <td>{{ $size->name }}</td>
              <td>{{$size->status == '1' ? 'active':'no active' }}</td>
              <td>
                <a href="{{   action('SizeController@edit', $size->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a></td>
              <td><form action="{{ route('size.destroy', $size->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn" type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                  <i class="glyphicon glyphicon-trash" style="color: red">Xóa</i>
                </a></button>
                </form>

                \<a href="{{ action('SizeProductController@size',$size->id) }}"><i class="fa fa-info" style="color:#8BC34A">Xem danh sách product</i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Tên</th>
              <th>Trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop