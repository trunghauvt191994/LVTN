@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại Tin
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
                        <th>Tên</th>
                        <th>Tên Không Dấu</th>
                        <th>Thời Gian Tạo</th>
                        <th>Thời Gian Sửa</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($theloaitin as $tlt)
                    <tr class="even gradeC" align="center">
                        <td>{{$tlt->id}}</td>
                        <td>{{$tlt->ten}}</td>
                        <td>{{$tlt->ten_khong_dau}}</td>
                        <td>{{$tlt->created_at}}</td>
                        <td>{{$tlt->updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/theloaitin/xoa/{{$tlt->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/theloaitin/sua/{{$tlt->id}}">Edit</a></td>
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