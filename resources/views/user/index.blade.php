@extends('common.default')
@section('content')
<div class="col-lg-12">
  <div class="card">
    <div class="header">
      <a href="{{ action('UserController@create') }}" class="btn btn-info"><i class="icon-plus" style="color: red">Thêm tài khoản</i></a>
    </div>
    <div class="body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Quyền</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ getRoleNameById($user->role_id) }}</td>
              <td>
                <a href="{{ action('UserController@edit', $user->id) }}"><i class="fa fa-edit" style="color: blue"> Sửa</i></a>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('UserController@destroy', $user->id), 'style' => 'display: inline-block;')) }}
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
              <th>Username</th>
              <th>Tên</th>
              <th>Email</th>
              <th>Quyền</th>
              <th>Thao tác</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@stop