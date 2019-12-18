@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a User</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('UserController@update', $user->id))) }}
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                {{ Form::text('username', $user->username, array('class' => 'form-control')) }}
                <label>User name</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('name', $user->name, array('class' => 'form-control')) }}
            <label>Name</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::text('email', $user->email, array('class' => 'form-control')) }}
            <label>email</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-group">
            <label>Role</label>
          <div class="form-label-group">
            {{ Form::select('role_id', getListRole(), $user->role_id, array('class' => 'form-control')) }}
          </div>
        </div>
        
        <div class="form-group">
          <div class="form-label-group">
            {{ Form::password('password', null, array('class' => 'form-control')) }}
            <label>Change password</label>
          </div>
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn-block')) }}
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
