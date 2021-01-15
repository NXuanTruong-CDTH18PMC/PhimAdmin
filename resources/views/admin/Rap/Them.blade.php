@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.rap.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Rạp</i></a>
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
                <label>Mã Rạp Phim</label>
                <input class="form-control" name="id" value="" placeholder="Mã Rạp" />
                <div>    
                {!! $errors->first('id') !!}
            </div>    
            </div>
                <div class="form-group">
                <label>Tên Rạp</label>
                
                <input class="form-control" name="TenRap" value="" placeholder="Tên Rạp" />
                <div>
                {!! $errors->first('TenRap') !!}
            </div>
            </div>
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Địa Chỉ</label>
                <input id="cc-exp" name="DiaChi" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid address" placeholder="Địa chỉ" autocomplete="cc-exp">
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
               </div>
               <div class="form-group">
                <label>Số Phòng</label>
                <input class="form-control" name="SoPhong" value="" placeholder="Số Phòng" />
                <div>    
            </div>  
            
            
            
            
            
            
            <div class="form-group">
                <label>Số điện thoại</label>
                <input class="form-control" name="SDT" value="" placeholder="Số Điện Thoại" />
                <div>    
            </div> 
           
                
                
            <div class="form-group">
                <label for="input" >Trạng Thái</label>
                <div>
                <select id="input" name="TrangThai"  class="form-control">
                            <option value="">--Chọn Trạng Thái--</option>
                            <option value="1">Đang Chiếu</option>
                            <option value="2">Sắp Chiếu</option>
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