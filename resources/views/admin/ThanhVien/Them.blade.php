@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.thanhvien.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Thành viên</i></a>
                /Thêm Mới
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
        <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Mã thành viên</label>
                <input class="form-control" name="MaTV" value="" placeholder="Mã thành viên..." />
                <div>    
            </div>    
            </div>
                <div class="form-group">
                <label>Tên thành viên</label>
                
                <input class="form-control" name="TenTV" value="" placeholder="Tên thành viên..." />
                <div>
              
            </div>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <textarea class="form-control" rows="2" name="SDT" placeholder="Số điện thoại..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea class="form-control" rows="2" name="DiaChi" placeholder="Địa chỉ..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            
            <div class="form-group">
                <label>Email</label>
                <textarea class="form-control" rows="2" name="Email" placeholder="Email..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            
                
           
                <div class="form-group">
                    <label>Hình ảnh </label>
                    <input type="file" name="Hinh" value="" >
                    
                        
                    </div>
                </div>




             <div class="form-group">
                <label>Tên tài khoản</label>
                <textarea class="form-control" rows="2" name="TenTK" placeholder="Nhập tên tài khoản..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <textarea class="form-control" rows="2" name="MK" placeholder="Nhập mật khẩu..."></textarea>
                <script type="text/javascript"> </script>
            <div>            
                
            <div class="form-group">
                <label for="input" >Trạng Thái</label>
                <div>
                    <select id="input" name="TrangThai"  class="form-control">
                            <option value="">--Chọn Trạng Thái--</option>
                            <option value="2">Ẩn</option>
                            <option value="1">Hiện</option>
                            <?php  ?>
                    </select>
                </div>
                <div>

                
                    
                
            </div>
        </div>
            </div>
        </div>
      
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>
@stop