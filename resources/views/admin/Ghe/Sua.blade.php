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
                /Sửa
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
                <label>Mã loại ghế</label>
                
                <input class="form-control" name="LoaiGhe" value="{{ $Ghe -> LoaiGhe }}" placeholder="Nhập mã loại ghế..." />
                <div>
              
            </div>
            </div>
            <div class="form-group">
                <label>Rạp</label>
                <input class="form-control" rows="2" name="Rap" value="{{ $Ghe -> Rap }}" placeholder="Nhập mã rạp..."/>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Số hàng</label>
                <textarea class="form-control" rows="2" name="SoHang" placeholder="Nhập số hàng..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Số cột</label>
                <textarea class="form-control" rows="2" name="SoCot" placeholder="Nhập số cột..."></textarea>
                <script type="text/javascript"> </script>
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