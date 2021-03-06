@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{{ Route('admin.phim.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Phim</i></a>
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
                <label>Tên Phim</label>
                
                <input class="form-control" name="TenPhim" value="" placeholder="Tên PHim..." />
                <div>
                {!! $errors->first('TenPhim') !!}
            </div>
            </div>
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Ngày Chiếu</label>
                <input id="cc-exp" name="NgayChieu" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="YYYY-MM-DD" autocomplete="cc-exp">
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
               </div>
            <div class="form-group">
                 <label for="cc-exp" class="control-label mb-1">Ngày Kết thúc</label>
                <input id="cc-exp" name="NgayKetThuc" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="YYYY-MM-DD" autocomplete="cc-exp">
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
            </div>
            
            <div class="form-group">
                <label>Đạo diễn</label>
                <textarea class="form-control" rows="2" name="DaoDien" placeholder="Đạo diễn..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Diễn Viên</label>
                <textarea class="form-control" rows="2" name="DienVien" placeholder="Diễn Viên..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Traller</label>
                <textarea class="form-control" rows="2" name="Trailer" placeholder="Link..."></textarea>
                <script type="text/javascript"> </script>
            <div>
            <div class="form-group">
                <label>Điểm</label>
                <input class="form-control" name="Diem" value="" placeholder="Diem" />
                <div>    
            </div>  
            <div class="form-group">
                <label>Thời Lượng</label>
                <input class="form-control" name="ThoiGian" value="" placeholder="thoigian" />
                <div>    
            </div> 
            <div class="form-group">
                <label for="input" >Thể Loại</label>
                <div>
                    <select id="input" name="TL"  class="form-control">
                    @foreach($TL as $cn)
                                        <option value="{{$cn->id}}">{{$cn->TenTL}}</option>
                                        @endforeach
                            
                    </select>
                </div>
                <div>
                    
                
            </div>
            <div class="form-group">
                <label>Tuổi</label>
                <input class="form-control" name="Tuoi" value="" placeholder="Tuổi" />
                <div>    
            </div> 
           
                <div class="form-group">
                    <label>Hình ảnh </label>
                    <input type="file" name="HinhAnh" value="" >
                    
                        
                    </div>
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