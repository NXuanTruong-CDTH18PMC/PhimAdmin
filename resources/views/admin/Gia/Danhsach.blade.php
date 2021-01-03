@extends('admin.master')
@section('title')
    <h3 class="page-header ">

       Giá/
        <a href="{{ Route('admin.gia.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>

       
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">

    <b><i>Giá</i></b>

   
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
          
            <tr>
                <th>Mã Giá</th>
                <th>Giá</th>


                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>

        @foreach($gia as $gi)
       
        <tbody>
       
                <td>{{$gi->MaGia}}</td>
                <td>{{$gi->Gia}}</td>
                
               
                
                
                
             
                
               

      
               
                
                   
                   

              
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.gia.delete',$gi->MaGia) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.gia.update',$gi->MaGia) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>

                </td>
           
               
        </tbody>
      @endforeach
    </table>

  


   
</div>
    <!-- /.row -->
</div>



</div>
@stop
