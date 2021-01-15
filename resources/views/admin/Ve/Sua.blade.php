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
        </div>
                <div class="form-group">
                <label>Phim</label>
                
                <input class="form-control" name="Phim" value="" placeholder="Nhập phim..." />
                <div>
              
            </div>
            </div>
            <div class="form-group">
                <label>Phòng</label>
                <textarea class="form-control" rows="2" name="Phong" placeholder="Nhập phòng..."></textarea>
                <script type="text/javascript"> </script>
            <div>

            <div class="form-group">
                <label>Suất chiếu</label>
                <textarea class="form-control" rows="2" name="SC" placeholder="Nhập mã suất chiếu..."></textarea>
                <script type="text/javascript"> </script>
            <div>

            <div class="form-group">
                <label>Ngày chiếu</label>
                <textarea class="form-control" rows="2" name="NgayChieu" placeholder="Nhập mã phim..."></textarea>
                <script type="text/javascript"> </script>
            <div>

               <div class="form-group">
                <label>Ghế</label>
                <textarea class="form-control" rows="2" name="Ghe" placeholder="Nhập mã ghế..."></textarea>
                <script type="text/javascript"> </script>
            <div>

            <div class="form-group">
                <label>Giá</label>
                <textarea class="form-control" rows="2" name="Gia" placeholder="Nhập giá..."></textarea>
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