@extends('common.default')
@section('content')
<div class="container-fluid">
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    <a href="{{ action('ProductToppingController@create', $productId) }}">Add topping for product</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ToppingId</th>
            <th>Name</th>
            <th>Price</th>
            <th>Nguồn</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach($data as $productTopping)
            <tr>
                <td>{{ $productTopping->id }}</td>
                <td>{{ getValueTopping($productTopping->topping_id, 'name') }}</td>
                <td>{{ getValueTopping($productTopping->topping_id, 'price') }}</td>
                <td>{{ getSourceProductTopping($productTopping->source) }}</td>
                <td>
                    <i class="btn btn-warning">
                        <a href="{{ action('ProductToppingController@edit', array($productId, $productTopping->id)) }}">Edit</a>
                    </i>
                    <i class="glyphicon glyphicon-trash">
                      
                        {{ Form::open([
                          'method' => 'POST', 
                          'action' => ['ProductToppingController@destroy', $productId, $productTopping->id]]) }}
                          {{ Form::open(array('method'=>'POST', 'action' => array('ProductToppingController@destroy', $productId, $productTopping->id), 'style' => 'display: inline-block;')) }}
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