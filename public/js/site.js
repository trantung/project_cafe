$(function (){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#product-list').on('click',function(){
        var product_id = $(this).data('id');

      $.get("{{ route('size_product.size') }}" +'/' + $size_id, function (data) {

          alert("adng");
      })
    });
   
});