@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left">Thêm mới && <a href="{{ action('UserController@index') }}" style="color:darkred">Trở lại</a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('UserController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          {{ Form::text('username', null, array('class' => 'form-control has-feedback-left','placeholder'=>'username')) }}
          <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          {{ Form::text('name', null, array('class' => 'form-control has-feedback-left','placeholder'=>'họ & tên')) }}
          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          {{ Form::text('email', null, array('class' => 'form-control has-feedback-left','placeholder'=>'email')) }}
          <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2">Quyền</label>
            <div class="col-md-10 col-sm-10 ">
              {{ Form::select('role_id', getListRole(), array('class' => 'form-control')) }}
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
          {{ Form::reset('Reset', array('class' => 'btn btn-info')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop