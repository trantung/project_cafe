@extends('common.default')
 
@section('content')
    
<!-- DataTables Example -->
<div class="container-fluid">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fas fa-plus"></i> Thêm Mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th >Thao Tac</th>
                            <th>STT</th>
                            <th >Thời lượng</th>
                            <th >status</th>
                            <th >avatar</th>
                            <th >Mô Tả</th>
                            <th >Giá Bán</th>
                            <th >Giá Gốc</th>
                            <th>Tên sản phẩm</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th >Thao Tac</th>
                            <th>STT</th>
                            <th >duration_time</th>
                            <th >status</th>
                            <th >avatar</th>
                            <th >description</th>
                            <th >price_pay</th>
                            <th >price_origin</th>
                            <th >name</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                            <tr> 
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    
                                        <a href="{{ route('products.show',$product->id) }}"><i class="fa fa-info" style="color:#8BC34A"> Xem</i></a>
                        
                                        <a  href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit" style="color:#f783ac"> Sửa</i></a>
                    
                                        <a class="glyphicon glyphicon-trash">
                                        @csrf
                                            @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt"> Xóa</i></button>
                                        </a >
                                    </form>
                                </td>
                               <td >{{ $product->id }}</td>
                                <td>{{ $product->duration_time }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                        <img src="{{$product->avatar}}" width="100px" height="100px">
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price_pay }}</td>
                                <td>{{ $product->price_origin }}</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end DataTables Example -->
@endsection