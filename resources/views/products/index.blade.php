@extends('common.default')

@section('content')

<!-- DataTables Example -->

<!-- end DataTables Example -->
<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <h2>Danh sách sản phẩm</h2>
            <div class="card-header">
                <button class="btn btn-sm btn-info"><a href="{{ action('ProductController@create') }}"><i class="fa fa-plus-circle" style="color: red"></i></a></button>
            </div>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>avatar</th>
                            <th>Mô Tả</th>
                            <th>Giá Bán</th>
                            <th>Giá Gốc</th>
                            <th>Thao Tac</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{$product->avatar}}" width="100px" height="100px">
                            </td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price_pay }}</td>
                            <td>{{ $product->price_origin }}</td>
                            <td>
                                <a href="{{ action('ProductController@show',$product->id) }}"><i class="fa fa-eye" style="color:#8BC34A" title="Xem"></i></a>

                                <a href="{{ action('ProductController@edit',$product->id) }}"><i class="fa fa-edit" style="color:#f783ac" title="Sửa"></i></a>
                                {{ Form::open(array('method'=>'DELETE', 'action' => array('ProductController@destroy', $product->id), 'style' => 'display: inline-block;')) }}
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    <i class="far fa-trash-alt" style="color: red"></i>
                                </a>
                                {{ Form::close() }}
                                <a href="{{ action('ProductToppingController@list',$product->id) }}"><i class="icon-cursor" style="color:#f783ac">Topping</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>avatar</th>
                            <th>Mô Tả</th>
                            <th>Giá Bán</th>
                            <th>Giá Gốc</th>
                            <th>Thao Tac</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection