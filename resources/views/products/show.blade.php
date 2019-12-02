@extends('common.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Chi tiết sản phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
               <p class="item1">
                    <strong>duration_time:</strong>
                    {{ $product->duration_time }}
               </p>
               <p class="item1">
                    <strong>close_time:</strong>
                    {{ $product->close_time }}
               </p>
               <p class="item1">
                    <strong>open_time:</strong>
                    {{ $product->open_time }}
               </p>
               <p class="item1">
                    <strong>status:</strong>
                    {{ $product->status }}
               </p>
               <p class="item1">
                    <strong>avatar:</strong>
                   <img src= "{{ $product->avatar }}" width="100px" height="100px" alt="avatar">
               </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
               <p class="item1">
                    <strong>weight_number:</strong>
                    {{ $product->weight_number }}
               </p>
               <p class="item1">
                    <strong>description:</strong>
                    {{ $product->description }}
               </p>
               <p class="item1">
                    <strong>print_view:</strong>
                    {{ $product->print_view }}
               </p>
               <p class="item1">
                    <strong>barcode:</strong>
                    {{ $product->barcode }}
               </p>
               <p class="item1">
                    <strong>code:</strong>
                    {{ $product->code }}
               </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
               <p class="item1">
                    <strong>price_pay:</strong>
                    {{ $product->price_pay }}
               </p>
               <p class="item1">
                    <strong>price_origin:</strong>
                    {{ $product->price_origin }}
               </p>
               <p class="item1">
                    <strong>name:</strong>
                    {{ $product->name }}
               </p>
               <p class="item1">
                    <strong>category_id:</strong>
                    {{ $product->category_id }}
               </p>
               <p class="item1">
                    <strong>created_at:</strong>
                    {{ $product->created_at }}
               </p>
            </div>
        </div>
    </div>
@endsection