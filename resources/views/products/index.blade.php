@extends('common.default')
 
@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
<!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
        <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fas fa-plus"></i> Thêm Mới</a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th >Thao Tac</th>
                            <th>STT</th>
                            <th >duration_time</th>
                            <th >close_time</th>
                            <th >open_time</th>
                            <th >status</th>
                            <th >avatar</th>
                            <th >weight_number</th>
                            <th >description</th>
                            <th >print_view</th>
                            <th >barcode</th>
                            <th >code</th>
                            <th >price_pay</th>
                            <th >price_origin</th>
                            <th >name</th>
                            <th >category_id</th>
                            <th >created_at</th>
                            <th >updated_at</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th >Thao Tac</th>
                            <th>STT</th>
                            <th >duration_time</th>
                            <th >close_time</th>
                            <th >open_time</th>
                            <th >status</th>
                            <th >avatar</th>
                            <th >weight_number</th>
                            <th >description</th>
                            <th >print_view</th>
                            <th >barcode</th>
                            <th >code</th>
                            <th >price_pay</th>
                            <th >price_origin</th>
                            <th >name</th>
                            <th >category_id</th>
                            <th >created_at</th>
                            <th >updated_at</th>
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
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
<!-- end DataTables Example -->
@endsection