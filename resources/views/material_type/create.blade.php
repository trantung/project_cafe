@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Thêm Đơn vị</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ route('material_type.index') }}"><i class="fa fa-backward"></i> Back</a>
          </div>
      </div>
    </div>
    <div class="card-body">
      {{ Form::open(array('method'=>'POST', 'action' => array('MaterialTypeController@store'))) }}
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <label>Tên đơn vị NVL</label>
              {{ Form::text('name', null, array('class' => 'form-control','onkeyup'=>'ChangeToSlug();','id'=>'name')) }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <label>mã đơn vị NVL</label>
              {{ Form::text('desc', null, array('class' => 'form-control')) }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <label>Quy đổi đơn vị</label>
              <div class="convert_content">
                  <input type="text" name="converts[]">
                  {{ Form::text('', null, array('class' => '','id'=>'slug','name' =>'converts[]')) }}
                  <span>=</span><input type="text" name=" converts[]"> 
                  {{ Form::select('', getListMaterialType(), array('class' => 'browser-default custom-select')) }}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <div class="content" style="border: 1px solid #d6c2c2;border-radius: 5px;padding: 5px;margin: 5px;">
                  <h3>tham khảo</h3>
                  <div class="body">
                    <a href="#defaultModal1" data-toggle="modal" data-target="#defaultModal1">
                      Bảng Quy Đổi đơn vị
                    </a><Br>
                    <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal">
                      Hướng dẫn sử dụng
                    </a>
                  </div>
                  <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="title" id="defaultModalLabel">Hướng dẫn sử dụng</h4>
                        </div>
                        <div class="modal-body">
                          Bước 1:cấu hình các trường bắt buộc<br>
                          -Tên đơn vị NVL<br>
                          -Trạng thái đơn vị NVL<br>
                          Bước 2: cấu hình các trường hợp còn lại<br>
                          - mô tả đơn vị NVL<br>
                          -Quy đổi đơn vị(áp dụng để quy đổi đơn vị chưa có sẵn)<br>
                          -Lưu ý tất cả các đơn vị NVL đã có sẵn để tham chiếu sẽ không thể chỉnh sửa thông tin nào khác.
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">đóng</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="title" id="defaultModalLabel1">Bảng quy đổi đơn vị </h4>
                        </div>
                        <div class="modal-body">
                          <div class="table-responsive">
                            <table class="table m-b-0">
                              <thead>
                                <tr>
                                  <th>Đơn vị đo khối lượng</th>
                                  <th>Đơn vị đo thể tích </th>
                                  <th>Chuyển đổi giữa các đơn vị</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1kg = 1000 g</td>
                                  <td>1l = 1000 ml</td>
                                  <td>1kg nước = 1 l bơ </td>
                                </tr>
                                <tr>
                                  <td> 1 yến = 10.000 g</td>
                                  <td>1 Teaspoon = 5 ml</td>
                                  <td>1 kg bơ = 1.09 l bơ </td>
                                </tr>
                                <tr>
                                  <td>1 tạ = 100.000 g</td>
                                  <td>1 Dessertspoon = 10 ml</td>
                                  <td>1 kg sữa = 1.09 l sữa </td>
                                </tr>
                                <tr>
                                  <td> 1 tấn = 1.000.000 g</td>
                                  <td></td>
                                  <td>1kg đường = 1.25 l đường </td>
                                </tr>
                                <tr>
                                  <td> </td>
                                  <td></td>
                                  <td>1kg bia = 0.99 l bia </td>
                                </tr>
                                <tr>
                                  <td> </td>
                                  <td></td>
                                  <td>1kg bột mì = 1.75 l bột mì </td>
                                </tr>
                                <tr>
                                  <td> </td>
                                  <td></td>
                                  <td>1 oz = 28.3495232 g </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">đóng</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <h4>Trạng thái đơn vị NVL(<span style="color: red">*</span>)</h4>
          <hr style="width: 100% ; border: 1px solid #493d3d">
          <div>
            <label>Có còn hiệu lực không?</label>
              <input type="radio"  id="option1" name="active" value="1">Có</label>
              <input type="radio" id="option2" name="active" value="0" >Không</label>
          </div>
        </div>

          {{ Form::submit('Lưu', array('class' => 'btn btn-primary text-center submit')) }}
         
        </div>
      </div>
      {{ Form::close() }}
    </div>
    @stop
    <script >
      $(function(){
        $('.submit').click(function(){
          // get data as array
          var converts = $('input[name ="converts[]"]').map(function(){
            return this.value;

          }).get();
          $.ajax({
            type:"POST",
            data:{
              'converts[]':converts,
            },
            success:function(){

            }
          });
        });
      });
    </script>