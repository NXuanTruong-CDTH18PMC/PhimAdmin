@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.rap.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Rạp Phim</i></a>
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
        <div>    
            </div>    
            </div>
                <div class="form-group">
                <label>Tên Rạp Phim</label>
                <input class="form-control" name="TenRap" value="{{ $rap -> TenRap }}" placeholder="Tên Rạp Phim" />
                <div>
               
            </div>
            </div>
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Địa Chỉ</label>
                <input id="cc-exp" name="DiaChi" type="tel" class="form-control cc-exp" value="{{ $rap -> DiaChi }}">
               </div>
            
                       
            <div class="form-group">
                <label>Số Phòng</label>
                <input class="form-control" name="SoPhong" value="{{ $rap -> SoPhong }}" placeholder="Số Phòng" />
                <div>    
            </div>       
            <div class="form-group">
                <label>Số Phòng</label>
                <input class="form-control" name="SDT" value="{{ $rap -> SDT }}" placeholder="Số điện thoại" />
                <div>    
            </div>                 
            <div class="form-group">
                <label for="input" >Trạng Thái</label>
                <div>
                <select id="input" name="TrangThai" value="{{$rap->TrangThai}}" class="form-control">
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