@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.nhanvien.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Nhân Viên</i></a>
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
                <label>Mã Nhân Viên</label>
                <input class="form-control" name="MaNV" value="" placeholder="Mã Nhân Viên" />
                <div>    
            </div>    
            </div>
                <div class="form-group">
                <label>Tên Nhân Viên</label>
                
                <input class="form-control" name="TenNV" value="" placeholder="Tên Nhân Viên" />
                <div>
                {!! $errors->first('TenNV') !!}
            </div>
            </div>
            
            
            <div class="form-group">
                <label>CMND</label>
                <textarea class="form-control" rows="2" name="CMND" placeholder="CMND"></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <textarea class="form-control" rows="2" name="SDT" placeholder="Số điện thoại"></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea class="form-control" rows="2" name="DiaChi" placeholder="Địa chỉ"></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Mã Rạp</label>
                <input class="form-control" name="MaRap" value="" placeholder="Mã Rạp" />
                <div>    
                {!! $errors->first('MaRap') !!}
            </div>  
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="Email" value="" placeholder="Email" />
                <div>    
            </div> 
           
                <div class="form-group">
                    <label>Hình ảnh </label>
                    <input type="file" name="Hinh" value="" >
                    
                        
                    </div>
                </div>
                <div class="form-group">
                <label>Tên tài khoản</label>
                <input class="form-control" name="TenTK" value="" placeholder="Tên tài khoản" />
                <div>    
            </div> 
            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="form-control" name="MK" value="" placeholder="Mật khẩu" />
                <div>    
            </div> 
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