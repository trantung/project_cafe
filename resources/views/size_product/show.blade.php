@extends('common.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Chi tiết</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('size_product.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                <p class="item1">
                        <strong>weight_number:</strong>
                        {{ $SizeProduct->weight_number }}
                </p>
                <p class="item1">
                        <strong>product_id:</strong>
                        {{ $SizeProduct->product_id }}
                </p>
                <p class="item1">
                        <strong>size_id:</strong>
                        {{ $SizeProduct->size_id }}
                </p>
                <p class="item1">
                        <strong>price:</strong>
                        {{ $SizeProduct->price }}
                </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                <p class="item1">
                        <strong>active:</strong>
                        {{ $SizeProduct->active }}
                </p>
                <p class="item1">
                        <strong>created_at:</strong>
                        {{ $SizeProduct->created_at }}
                </p>
                <p class="item1">
                        <strong>updated_at:</strong>
                        {{ $SizeProduct->updated_at }}
                </p>
                </div>
            </div>
        </div>
    
@endsection