@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh sách ghế/
        <a href="{{ Route('admin.ghe.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách ghế</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã ghế</th>
                <th>Mã loại ghế</th>
                <th>Tên loại ghế</th>
                <th>Rạp</th>
                <th>Số hàng</th>
                <th>Số cột</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($ghe as $key => $demos)
        <tbody>
       
        <td>{{ $demos -> id }}</td>
                <td>{{ $demos -> LoaiGhe }}</td>
                <td><span class="text-ellipsis">{{$demos->loaighe->TenLoai}}</span></td>
                <td>{{ $demos -> Rap }}</td>
                <td>{{ $demos -> SoHang }}</td>
                <td>{{ $demos -> SoCot }}</td>
            
               
                
               
                
                <td class="center"><a href="{{ Route('admin.ghe.update',$demos->id) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
