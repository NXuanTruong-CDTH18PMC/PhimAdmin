@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh Sách Thành Viên/
        <a href="{{ Route('admin.thanhvien.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách thành viên</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã TV</th>
                <th>Tên TV</th>
                <th>SDT</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Hình ảnh</th>
                <th>Tên TK</th>
                <th>Mật khẩu</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($thanhvien as $demos)
        <tbody>
       
        <td>{{ $demos -> MaTV }}</td>
                <td>{{ $demos -> TenTV }}</td>
                <td>{{ $demos -> SDT }}</td>
                <td>{{ $demos -> DiaChi }}</td>
                <td>{{ $demos -> Email }}</td>
               
                
                <td>
                <img src="{{ asset('/upload/phim/'.$demos->Hinh) }}" alt="Image" style="width: 70px; height: 40px;">
                </td>
                <td>{{ $demos -> TenTK }}</td>
                <td>{{ $demos -> MK }}</td>
        
                
                <td class="center"><a href="" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="">An</i></a>
                </td>
                
               
                
                   
                   
                </td>
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.thanhvien.delete',$demos->MaTV) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.thanhvien.update',$demos->MaTV) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
