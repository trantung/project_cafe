@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left">Sửa {{ $user->username }} && <a href="{{ action('UserController@index') }}" style="color:darkred">Trở lại</a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('UserController@update', $user->id))) }}
      <div class="form-group row">
        <div class="col-md-4 col-sm-4  form-group has-feedback">
        <label class="control-label col-md-2 col-sm-2">Username</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('username', $user->username, array('class' => 'form-control has-feedback-left','placeholder'=>'username')) }}
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Họ tên</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('name', $user->name, array('class' => 'form-control has-feedback-left','placeholder'=>'họ & tên')) }}
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
          </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Email</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('email', $user->email, array('class' => 'form-control has-feedback-left','placeholder'=>'email')) }}
              <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2">Quyền</label>
            <div class="col-md-10 col-sm-10 ">
              {{ Form::select('role_id', getListRole(),$user->role_id, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3">password</label>
          <div class="col-md-9 col-sm-9 ">
            {{ Form::password('password', null, array('class' => 'form-control','placeholder'=>'nhập mật khẩu')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
          {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
