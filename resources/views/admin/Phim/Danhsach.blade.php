@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh Sách Phim/
        <a href="{{ Route('admin.phim.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách Phim</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã Phim</th>
                <th>Tên Phim</th>
                <th>Ngày chiếu</th>
                <th>Ngày kết thúc</th>
                <th>Thời gian</th>
                <th>Hình ảnh</th>
                <th>Tuổi</th>
                <th>TT</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($demo as $demos)
        <tbody>
       
        <td>{{ $demos -> MaPhim }}</td>
                <td>{{ $demos -> TenPhim }}</td>
                <td>{{ $demos -> NgayChieu }}</td>
                <td>{{ $demos -> NgayKetThuc }}</td>
                <td>{{ $demos -> ThoiGian }}</td>
               
                
                <td>
                <img src="{{ asset('/upload/phim/'.$demos->HinhAnh) }}" alt="Image" style="width: 70px; height: 40px;">
                </td>
                <td>{{ $demos -> Tuoi }}</td>
             
                
                <td class="center"><a href="" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="">An</i></a>
                </td>
                
               
                
                   
                   
                </td>
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.phim.delete',$demos->MaPhim) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.phim.update',$demos->MaPhim) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
