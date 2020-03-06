@extends('common.default')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="header">
            <a class="btn btn-success" href="{{ route('size_product.create') }}"><i class="fas fa-plus"></i> Thêm Mới</a>
        </div>
        <div class="body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product</th>
                            <th>ProductID</th>
                            <th>Size</th>
                            <th>SizeId</th>
                            <th>Price</th>
                            <th>Trọng số hiển thị</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $sizeProduct )
                        <tr>
                            <th>{{ $sizeProduct->id }}</th>
                            <td>{{ getNameProductById($sizeProduct->product_id) }}</td>
                            <td>{{ $sizeProduct->product_id }}</td>
                            <td>{{ getNameSizeById($sizeProduct->size_id) }}</td>
                            <td>{{ $sizeProduct->size_id }}</td>
                            <td>{{ $sizeProduct->price }}</td>
                            <td>{{ $sizeProduct->weight_number }}</td>
                            <td>
                                <a href="{{ action('SizeProductController@show',$sizeProduct->id) }}"><i class="fa fa-info" style="color:#8BC34A">Xem</i></a>

                                <a href="{{ action('SizeProductController@edit',$sizeProduct->id) }}"><i class="fa fa-edit" style="color:#f783ac"> Sửa</i></a>
                                <a href="{{ action('SizeProductMaterialController@list',$sizeProduct->id) }}"><i class="fa fa-shower" style="color:#f783ac">Nguyên liệu</i></a>
                                {{ Form::open(array('method'=>'DELETE', 'action' => array('SizeProductController@destroy', $sizeProduct->id), 'style' => 'display: inline-block;')) }}
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    <i class="glyphicon glyphicon-trash">xóa</i>
                                </a>
                                {{ Form::close() }}
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