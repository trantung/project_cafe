@extends('common.default')
@section('content')
  <!-- top tiles -->
  <!-- main -content  -->
  <div class="row clearfix">
    <div class="col-lg-12">
      <div class="card">
        <div class="header">
          <h2> Livestream của tôi</h2>
        </div>
        <div class="body">
          <div class="row" style="margin: 5px">
            <div class="heaher-table">
              <button type="button" class="btn  btn-simple btn-sm btn-danger btn-filter" data-target="all">Tất cả</button>
              <button type="button" class="btn  btn-simple btn-sm btn-success btn-filter" data-target="approved">Đang phát</button>
              <button type="button" class="btn  btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Hẹn giờ phát</button>
              <button type="button" class="btn  btn-simple btn-sm btn-info btn-filter" data-target="pending">Đã phát xong</button>
            </div>
          </div>
          <div class="table-responsive m-t-20">
            <table class="table table-filter table-hover m-b-0" id="datatable">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tiêu đề</th>
                  <th>Ngày tạo</th>
                  <th>Thời gian phát</th>
                  <th>Khối</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                <tr data-status="approved">
                  <td>1</td>
                  <td>a</td>
                  <td>jacob</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-success">Đang phát</span></td>
                </tr>
                <tr data-status="suspended">
                  <td>2</td>
                  <td>a</td>
                  <td>jacob</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-warning">Hẹn giờ phát</span></td>
                </tr>
                <tr data-status="pending">
                  <td>3</td>
                  <td>a</td>
                  <td>jacob</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-info">Đã phát xong</span></td>
                </tr>
                <tr data-status="approved">
                  <td>4</td>
                  <td>a</td>
                  <td>jacob</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-success">đang phát</span></td>
                </tr>
                <tr data-status="approved">
                  <td>5</td>
                  <td>a</td>
                  <td>amelia</td>
                  <td>amelia@gnail.com</td>
                  <td>
                    a
                  </td>
                  <td><span class="badge badge-success">đang phát</span></td>
                </tr>
                <tr data-status="pending">
                  <td>6</td>
                  <td>a</td>
                  <td>michael</td>
                  <td>michael@gmail.com</td>
                  <td>
                    a
                  </td>
                  <td><span class="badge badge-info">Đã phát xong</span></td>
                </tr>
                <tr data-status="pending">
                  <td>7</td>
                  <td>a</td>
                  <td>michael</td>
                  <td>michael@gmail.com</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                    </div>
                  </td>
                  <td><span class="badge badge-info">đã phát xong</span></td>
                </tr>
                <tr data-status="approved">
                  <td>8</td>
                  <td>a</td>
                  <td>jacob</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-success">đang phát</span></td>
                </tr>
                <tr data-status="approved">
                  <td>9</td>
                  <td>a</td>
                  <td>amelia</td>
                  <td>amelia@gnail.com</td>
                  <td>
                    as
                  </td>
                  <td><span class="badge badge-success">đã phát</span></td>
                </tr>
                <tr data-status="pending">
                  <td>10</td>
                  <td>a</td>
                  <td>michael</td>
                  <td>michael@gmail.com</td>
                  <td>
                    s
                  </td>
                  <td><span class="badge badge-info">đã phát xong</span></td>
                </tr>
                <tr data-status="pending">
                  <td>11</td>
                  <td>oh yêu</td>
                  <td>michael</td>
                  <td>michael@gmail.com</td>
                  <td>
                    khối 11
                  </td>
                  <td><span class="badge badge-info">đã phát xong</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop