@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh Sách vé/
        <a href="{{ Route('admin.dsve.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách các danh sách vé</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã danh sách</th>
                <th>Số lượng</th>
                <th>Mã vé</th>
                <th>Mã thành viên</th>
                <th>Ngày tạo</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($dsve as $demos)
        <tbody>
       
        <td>{{ $demos -> MaDS }}</td>
                <td>{{ $demos -> SoLuong }}</td>
                <td>{{ $demos -> MaVe }}</td>
                <td>{{ $demos -> MaTV }}</td>
                <td>{{ $demos -> NgayTao }}</td>
               
                
               
                
                   
                   
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.dsve.delete',$demos->MaDS) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.dsve.update',$demos->MaDS) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
