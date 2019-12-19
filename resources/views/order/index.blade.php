@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Mã đơn hàng</th>
            <th>Tổng tiền</th>
            <th>Tiền thu về</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach($data as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->code }}</td>
                <td>{{ $order->total_product_price }}</td>
                <td>{{ $order->amount_after_promotion }}</td>
                <td>{{ getNameStatusOrder($order->status) }}</td>
                <td>
                    <i class="btn btn-warning">
                        <a href="{{ action('OrderController@show', $order->id) }}">Xem</a>
                    </i>
                    <i class="btn btn-warning">
                        <a href="{{ action('OrderController@process', $order->id) }}">Xem luồng đơn</a>
                    </i>
                    <i class="glyphicon glyphicon-trash">
                        {{ Form::open(array('method'=>'DELETE', 'action' => array('OrderController@destroy', $order->id), 'style' => 'display: inline-block;')) }}
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

@stop