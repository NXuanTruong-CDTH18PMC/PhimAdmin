@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh sách loại ghế/
        <a href="{{ Route('admin.loaighe.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách loại ghế</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã loại ghế</th>
                <th>Tên loại</th>
                <th>Mã giá</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($loaighe as $demos)
        <tbody>
       
        <td>{{ $demos -> MaLoaiGhe }}</td>
                <td>{{ $demos -> TenLoai }}</td>
                <td>{{ $demos -> MaGia }}</td>
    
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.loaighe.delete',$demos->MaLoaiGhe) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.loaighe.update',$demos->MaLoaiGhe) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
