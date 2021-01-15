@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Phòng Chiếu Phim/
        <a href="{{ Route('admin.phong.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách Phòng</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Tên Phòng</th>
                <th>Trạng Thái</th>
                <th>Số Lượng Ghế</th>
                <th>Mã Rạp</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($phong as  $ph)
        <tbody>
                <td>{{ $ph -> TenPhong }}</td>   
                @if ($ph->TrangThai == 1)
            <td><span class="text-ellipsis text-success">Đang hoạt động</span></td>
            @elseif ($ph->TrangThai == 2 ){
            <td><span class="text-ellipsis text-primary">Tạm ngưng hoạt động</span></td>
                @else
                <td><span class="text-ellipsis text-danger">Không Hoạt Động</span></td>
            @endif  
                <td>{{ $ph -> SoLuongGhe }}</td>

                <td>{{$ph -> Rap}}</td>
                
                
               
                
                   
                   
                
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.phong.delete',$ph->id) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.phong.update',$ph->id) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
