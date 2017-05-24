@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Tin
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
             @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}    
                    </div>
            @endif
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Loại Tin</th>
                        <th>Tên</th>
                        <th>Tên Không Dấu</th>
                        <th>Thời Gian Tạo</th>
                        <th>Thời Gian Sửa</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaitin as $lt)
                    <tr class="even gradeC" align="center">
                        <td>{{$lt->id}}</td>
                        <td>{{$lt->$tlt->ten}}</td>
                        <td>{{$lt->ten}}</td>
                        <td>{{$lt->ten_khong_dau}}</td>
                        <td>{{$lt->created_at}}</td>
                        <td>{{$lt->updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaitin/xoa/{{$lt->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaitin/sua/{{$lt->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection