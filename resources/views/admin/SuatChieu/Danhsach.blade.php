@extends('admin.master')
@section('title')
    <h3 class="page-header ">
<<<<<<< Updated upstream
       Suất chiếu/
        <a href="{{ Route('admin.suatchieu.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
=======
       Danh Sách Phim/
        <a href="" class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
>>>>>>> Stashed changes
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
<<<<<<< Updated upstream
    <b><i>Suất chiếu</i></b>
=======
    <b><i>Danh sách Phim</i></b>
>>>>>>> Stashed changes
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
<<<<<<< Updated upstream
          
            <tr>
                <th>Mã Suất chiếu</th>
                <th>Thời gian chiếu</th>
                <th>Trạng thái</th>
=======
           
            <tr>
                <th>Mã Phim</th>
                <th>Tên Phim</th>
                <th>Ngày chiếu</th>
                <th>Ngày kết thúc</th>
                <th>Thời gian</th>
                <th>Hình ảnh</th>
                <th>Tuổi</th>
                <th>TT</th>
>>>>>>> Stashed changes
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
<<<<<<< Updated upstream
        @foreach($sc as $suatchieu)
        <tbody>
       
                <td>{{$suatchieu -> MaSC}}</td>
                <td>{{$suatchieu -> ThoiGianChieu}}</td>
                <td>{{$suatchieu -> TrangThai}}</td>
                
               
                
                
                
             
                
               
=======
        @foreach($demo as $demos)
        <tbody>
       
        <td>{{ $demos -> MaPhim }}</td>
                <td>{{ $demos -> TenPhim }}</td>
                <td>{{ $demos -> NgayChieu }}</td>
                <td>{{ $demos -> NgayKetThuc }}</td>
                <td>{{ $demos -> ThoiGian }}</td>
               
                
                <td>
                <img src="" alt="Image" style="width: 70px; height: 40px;">
                </td>
                <td>{{ $demos -> Tuoi }}</td>
             
                
                <td class="center"><a href="" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="">An</i></a>
                </td>
>>>>>>> Stashed changes
                
               
                
                   
                   
<<<<<<< Updated upstream
              
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.suatchieu.delete',$suatchieu->MaSC) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.suatchieu.update',$suatchieu->MaSC) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
=======
                </td>
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.phim.delete',$demos->MaPhim) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
>>>>>>> Stashed changes
                </td>
           
               
        </tbody>
        @endforeach
    </table>
<<<<<<< Updated upstream
  
=======
>>>>>>> Stashed changes
   
</div>
    <!-- /.row -->
</div>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
</div>
@stop
