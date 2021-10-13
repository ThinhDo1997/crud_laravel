@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">

      <div class="row">
        <div class="col-lg-12">
          <h2>Danh sách User</h2></h2>
          <div class="table-responsive">
            <table class="table table-bordered table-hover tablesorter">
              <thead>
                <tr>
                  <th>STT <i class="fa fa-sort"></i></th>
                  <th>Tên <i class="fa fa-sort"></i></th>
                  <th>Ảnh đại diện <i class="fa fa-sort"></i></th>
                  <th>Địa chỉ <i class="fa fa-sort"></i></th>
                  <th>Ngày tạo <i class="fa fa-sort"></i></th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($all_user as $key => $user_key )
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $user_key->user_name }}</td>
                    <td><img src="public/uploads/user/{{ $user_key->user_image }}" height="120" width="100"></td>
                    <td>{{ $user_key->user_address }}</td>
                    <td>{{ $user_key->created_at }}</td>
                    <td align="center">
                      <a href="{{URL::to('/cap-nhat-user/'.$user_key->user_id)}}" class="active"
                          ui-toggle-class="">
                          <i class="fa fa-edit text-success text-active"></i>
                      </a> -- 
                      <a onclick="return confirm('Bạn có chắn chắc muốn xóa không ?')"
                          href="{{URL::to('/xoa-user/'.$user_key->user_id)}}" class="active"
                          ui-toggle-class="">
                          <i class="fa fa-times text-danger text"></i>
                      </a>
                  </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
      </div><!-- /.row -->

    </div> <!-- /#page-wrapper -->

   
@endsection


