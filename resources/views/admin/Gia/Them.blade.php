@extends('admin.master')

@section('content')
    <form action="" method="POST" >
        @csrf

    
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >

                <a href="{{ Route('admin.gia.index') }}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Giá</i></a>/Thêm Mới
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
                <label>Mã Giá</label>
                <input class="form-control" name="MaGia" value="" placeholder="Mã Giá" />
                <div>  
                {!! $errors->first('MaGia') !!}
            </div>    
            </div>
            
            <div class="form-group">
                <label>Giá</label>
                <input class="form-control" name="Gia" value="" placeholder="Giá" />
                <div>  
                {!! $errors->first('Gia') !!}
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
        </div>
    </form>
@stop