@extends('admin.master')
@section('title')
    <h3 class="page-header ">

       Suất chiếu/
        <a href="{{ Route('admin.suatchieu.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>

       
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">

    <b><i>Suất chiếu</i></b>

   
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
          
            <tr>
                <th>Thời gian chiếu</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>

        @foreach($suat as $sc)
       
        <tbody>
       
                <td>{{$sc->ThoiGianChieu}}</td>
                @if ($sc->TrangThai == 1)
            <td><span class="text-ellipsis text-success">Đang Chiếu</span></td>
            @elseif ($sc->TrangThai == 2 )
            <td><span class="text-ellipsis text-primary">Sắp Chiếu</span></td>
                @else
                <td><span class="text-ellipsis text-danger">Ngưng Chiếu</span></td>
            @endif  

                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.suatchieu.delete',$sc->id) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.suatchieu.update',$sc->id) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>

                </td>
           
               
        </tbody>
      @endforeach
    </table>

  


   
</div>
    <!-- /.row -->
</div>



</div>
@stop
