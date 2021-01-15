@extends('admin.master')
@section('title')
    <h3 class="page-header ">

       Thể loại/
        <a href="{{ Route('admin.theloai.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>

       
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
                <th>Tên Thể Loại</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>

        @foreach($theloai as $tl)
       
        <tbody>
       
                <td>{{$tl->TenTL}}</td>
     
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.theloai.delete',$tl->id) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.theloai.update',$tl->id) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
      @endforeach
    </table>

  


   
</div>
    <!-- /.row -->
</div>



</div>
@stop
