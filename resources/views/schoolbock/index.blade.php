@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý tài khoản người dùng<small><a href="{{ action('SchoolbocksController@create') }}"><i class="fa fa-plus-circle"></i> Thêm mới</a></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tên Khối</th>
                    <th>mô tả</th>
                    <th colspan="2">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $schoolbock)
                  <tr>
                    <td>{{ $schoolbock->id }}</td>
                    <td>{{ $schoolbock->name }}</td>
                    <td>{{ $schoolbock->desc }}</td>
                    <td><a href="{{ action('SchoolbocksController@edit', $schoolbock->id) }}" title="Sửa"><i class="fa fa-edit" style="color:blue"></i></a></td>
                    <td>
                      <form action="{{ route('schoolbock.destroy',$schoolbock->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash" style="color:blue"></i>
                          </a></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop