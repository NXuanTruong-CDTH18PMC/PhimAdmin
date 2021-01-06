@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.loaighe.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Danh sách loại ghế</i></a>
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
                <label>Mã loại ghế</label>
                <input class="form-control" name="MaLoaiGhe" value="" placeholder="Nhập mã loại ghế..." />
                <div>    
            </div>    
            </div>
                <div class="form-group">
                <label>Tên loại</label>
                
                <input class="form-control" name="TenLoai" value="" placeholder="Nhập tên loại ghế..." />
                <div>
              
            </div>
            </div>
            <div class="form-group">
                <label>Mã giá</label>
                <textarea class="form-control" rows="2" name="MaGia" placeholder="Nhập mã giá..."></textarea>
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