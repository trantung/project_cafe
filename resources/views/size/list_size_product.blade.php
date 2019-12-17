@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
      <a class="btn btn-success" href="{{ route('size_product.create') }}"><i class="fas fa-plus"></i> Thêm Mới</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>product_id</th>
            <th>Giá</th>
            <td>weight_number</td>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($size_product as $sizes)
            <tr>
                <td>{{ ListProductName($sizes->product_id) }}</td>
                <td>{{$sizes->price}}
                  <td>{{$sizes->weight_number}}</td>
                <td>
                  <form action="{{ route('size_product.destroy',$sizes->id) }}" method="POST">
              
                    <a href="{{ route('size_product.show',$sizes->id) }}"><i class="fa fa-info" style="color:#8BC34A"> Xem</i></a>

                    <a  href="{{ route('size_product.edit',$sizes->id) }}"><i class="fas fa-edit" style="color:#f783ac"> Sửa</i></a>

                    <a class="glyphicon glyphicon-trash">
                    @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt"> Xóa</i></button>
                    </a >
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

@stop