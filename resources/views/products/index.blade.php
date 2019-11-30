@extends('common.default')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sản phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fas fa-plus"></i> Thêm Mới</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
   
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th rowspan="1" colspan="1">STT</th>
                        <th rowspan="1" colspan="1">duration_time</th>
                        <th rowspan="1" colspan="1">close_time</th>
                        <th rowspan="1" colspan="1">open_time</th>
                        <th rowspan="1" colspan="1">status</th>
                        <th rowspan="1" colspan="1">avatar</th>
                        <th rowspan="1" colspan="1">weight_number</th>
                        <th rowspan="1" colspan="1">description</th>
                        <th rowspan="1" colspan="1">print_view</th>
                        <th rowspan="1" colspan="1">barcode</th>
                        <th rowspan="1" colspan="1">code</th>
                        <th rowspan="1" colspan="1">price_pay</th>
                        <th rowspan="1" colspan="1">price_origin</th>
                        <th rowspan="1" colspan="1">name</th>
                        <th rowspan="1" colspan="1">category_id</th>
                        <th rowspan="1" colspan="1">created_at</th>
                        <th rowspan="1" colspan="1">updated_at</th>
                        <th rowspan="1" colspan="1">Thao Tac</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th rowspan="1" colspan="1">STT</th>
                        <th rowspan="1" colspan="1">duration_time</th>
                        <th rowspan="1" colspan="1">close_time</th>
                        <th rowspan="1" colspan="1">open_time</th>
                        <th rowspan="1" colspan="1">status</th>
                        <th rowspan="1" colspan="1">avatar</th>
                        <th rowspan="1" colspan="1">weight_number</th>
                        <th rowspan="1" colspan="1">description</th>
                        <th rowspan="1" colspan="1">print_view</th>
                        <th rowspan="1" colspan="1">barcode</th>
                        <th rowspan="1" colspan="1">code</th>
                        <th rowspan="1" colspan="1">price_pay</th>
                        <th rowspan="1" colspan="1">price_origin</th>
                        <th rowspan="1" colspan="1">name</th>
                        <th rowspan="1" colspan="1">category_id</th>
                        <th rowspan="1" colspan="1">created_at</th>
                        <th rowspan="1" colspan="1">updated_at</th>
                        <th rowspan="1" colspan="1">Thao Tac</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                        <tr role="row" class="odd"> 
                            <td >{{ ++$i }}</td>
                            <td>{{ $product->duration_time }}</td>
                            <td>{{ $product->close_time }}</td>
                            <td>{{ $product->open_time }}</td>
                            <td>{{ $product->status }}</td>
                            <td><img src="{{ $product->avatar }}" height="100px" width="100px"  /></td>
                            <td>{{ $product->weight_number }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->print_view }}</td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->price_pay }}</td>
                            <td>{{ $product->price_origin }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                
                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Chi tiết</a>
                    
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true" style="color:#dd4b39" title="Sửa"></span> SỬa </a>
                
                                    <a class="glyphicon glyphicon-trash">
                                    @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </a >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $products->links() !!}
        </div>
    </div>
   
</div>
@endsection