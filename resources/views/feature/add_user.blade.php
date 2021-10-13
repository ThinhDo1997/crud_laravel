@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-7">
            <form action="{{URL::to('/save-user') }}" role="form" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span style="color:red">' .$message. '</span>';
                            Session::put('message',null);
                        }
                ?>
                <div class="card-header p-2 text-primary border-botton border-primary">
                    <h2>Nhập thông tin User</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="user_name" placeholder="Nhập tên">
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" class="form-control" name="user_image" placeholder="Chọn đường dẫn">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="user_address" placeholder="Nhập địa chỉ">
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card m-1 border border-primary">
                        
                        <div class="card-body">
                            <div class="col-12" >
                                <button type="submit" id="btn-public" class="btn btn-success col-12" style="background-color:#3e3ed8" >Thêm mới</button>
                            </div>
                            {{-- <div class="col-12">
                                <button type="submit" id="btn-draft" class="btn btn-secondary col-12 mt-2">Bản nháp</button>
                            </div> --}}
                            <div class="col-12">
                                <a href="{{URL::to('/list-user')}}"><input type="button" class="btn btn-danger col-12 mt-2" value="Hủy"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection