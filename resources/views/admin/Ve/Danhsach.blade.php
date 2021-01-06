@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Vé/
        <a href="{{ Route('admin.ve.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách vé</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã vé</th>
                <th>Mã lịch chiếu</th>
                <th>Mã ghế</th>
                <th>Thành tiền</th>
                <th>Ngày tạo</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($ve as $demos)
        <tbody>
       
        <td>{{ $demos -> MaVe }}</td>
                <td>{{ $demos -> MaLC }}</td>
                <td>{{ $demos -> MaGhe }}</td>
                <td>{{ $demos -> ThanhTien }} VND</td>
                <td>{{ $demos -> NgayTao }}</td>
               
                
               
                
                   
                   
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.ve.delete',$demos->MaVe) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.ve.update',$demos->MaVe) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
