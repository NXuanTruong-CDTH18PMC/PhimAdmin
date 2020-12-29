@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.suatchieu.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Suất Chiếu</i></a>
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
                <label>Mã Suất Chiếu</label>
                <input class="form-control" name="MaSC" value="{{ $sc -> MaSC }}" placeholder="Mã Suất Chiếu" />
                <div>
                
                
            </div>    
            </div>    
          
                
                
            
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Thời Gian Chiếu</label>
                <input id="cc-exp" name="ThoiGianChieu" type="tel" class="form-control cc-exp" value="{{ $sc -> ThoiGianChieu }}" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="DD/MM" autocomplete="cc-exp">
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
               </div>          
                
            <div class="form-group">
                <label for="input" >Trạng Thái</label>
                <div>
                    <select id="input" name="TrangThai"  class="form-control">
                            <option value="{{ $sc -> TrangThai }}">--Chọn Trạng Thái--</option>
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