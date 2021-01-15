@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.phong.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Phòng</i></a>
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
                <label>Tên Phòng</label>
                
                <input class="form-control" name="TenPhong" value="" placeholder="Tên Phòng" />
                <div>
                {!! $errors->first('TenPhong') !!}
            </div>
            </div>
            
            <div class="form-group">
                <label>Số Lượng Ghế</label>
                <input class="form-control" name="SoLuongGhe" value="" placeholder="Số Lượng Ghế" />
                <div>    
            </div>  
            <div class="form-group">
                <label>Mã Rạp</label>
                <input class="form-control" name="Rap" value="" placeholder="Mã Rạp" />
                <div>    
            </div>            
            <div class="form-group">
                <label for="input" >Trạng Thái</label>
                <div>
                <select id="input" name="TrangThai"  class="form-control">
                            <option value="">--Chọn Trạng Thái--</option>
                            <option value="1">Đang hoạt động</option>
                            <option value="2">Tạm ngưng hoạt động</option>
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