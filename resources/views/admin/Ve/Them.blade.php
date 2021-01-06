@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.ve.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Vé</i></a>
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
                <label>Mã vé</label>
                <input class="form-control" name="MaVe" value="" placeholder="Nhập mã vé..." />
                <div>    
            </div>    
            </div>
                <div class="form-group">
                <label>Mã lịch chiếu</label>
                
                <input class="form-control" name="MaLC" value="" placeholder="Nhập mã lịch chiếu..." />
                <div>
              
            </div>
            </div>
            <div class="form-group">
                <label>Mã ghế</label>
                <textarea class="form-control" rows="2" name="MaGhe" placeholder="Nhập mã ghế..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Thành tiền</label>
                <textarea class="form-control" rows="2" name="ThanhTien" placeholder="Nhập thành viên..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Ngày tạo</label>
                <input id="cc-exp" name="NgayTao" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="YYYY-MM-DD" autocomplete="cc-exp">
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
               </div>
            
                
           
                
                
                    
                
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