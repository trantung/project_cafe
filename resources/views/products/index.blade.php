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
                <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th >avatar</th>
                            <th >Mô Tả</th>
                            <th >Giá Bán</th>
                            <th >Giá Gốc</th>
                            <th >Thao Tac</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr> 
                            <td >{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{$product->avatar}}" width="100px" height="100px">
                            </td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price_pay }}</td>
                            <td>{{ $product->price_origin }}</td>
                            <td>
                                <a href="{{ action('ProductController@show',$product->id) }}"><i class="fa fa-info" style="color:#8BC34A"> Xem</i></a>
                
                                <a  href="{{ action('ProductController@edit',$product->id) }}"><i class="fas fa-edit" style="color:#f783ac"> Sửa</i></a>
                                <a  href="{{ action('ProductToppingController@list',$product->id) }}"><i class="fas fa-shower" style="color:#f783ac">Topping</i></a>
                                <i class="glyphicon glyphicon-trash">
                                    {{ Form::open(array('method'=>'DELETE', 'action' => array('ProductController@destroy', $product->id), 'style' => 'display: inline-block;')) }}
                                        <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                            Delete
                                        </button>
                                    {{ Form::close() }}
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
<!-- end DataTables Example -->
@endsection