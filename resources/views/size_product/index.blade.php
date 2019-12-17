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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>active</th>
                    <th>weight_number</th>
                    <th>product_id</th>
                    <th>size_id</th>
                    <th>price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($size_product as $data )
                      <tr>
                          <th>{{$data->id}}</th>
                        <td>{{$data->active}}</td>
                        <td>{{$data->weight_number}}</td>
                        <td>{{ ListProductName($data->product_id) }}</td>
                        <td>{{ ListsizeName($data->size_id) }}</td>
                        <td>{{ $data->price }}</td>
                        <td>
                            <form action="{{ route('size_product.destroy',$data->id) }}" method="POST">
            
                                <a href="{{ route('size_product.show',$data->id) }}"><i class="fa fa-info" style="color:#8BC34A"> Xem</i></a>
                
                                <a  href="{{ route('size_product.edit',$data->id) }}"><i class="fas fa-edit" style="color:#f783ac"> Sửa</i></a>
            
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