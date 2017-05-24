<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TheLoaiTin;

class TheLoaiTinController extends Controller
{
    //
    public function getDanhSach()
    {
        $theloaitin = TheLoaiTin::all();
    	return view('admin.theloaitin.danhsach',['theloaitin'=>$theloaitin]);
    }

    public function getThem()
    {
        return view('admin.theloaitin.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'ten'=>'required|min:3|max:50|unique:the_loai_tin,ten'
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên thể loại',
                'ten.min'=>'Tên thể loại phải có độ dài 3 đến 100 ký tự',
                'ten.max'=>'Tên thể loại nhiều nhất 50 ký tự',
                'ten.unique'=>'Tên thể loại đã tồn tại',
            ]);

        $theloaitin = new TheLoaiTin;
        $theloaitin->ten = $request->ten;
        $theloaitin->ten_khong_dau = changeTitle($request->ten);
        $theloaitin->save();
        return redirect('admin/theloaitin/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $theloaitin = TheLoaiTin::find($id);
        return view('admin.theloaitin.sua',['theloaitin'=>$theloaitin]);
    }
    public function postSua(Request $request,$id)
    {
        $theloaitin = TheLoaiTin::find($id);
        $this->validate($request,
            [
                'ten'=>'required|unique:the_loai_tin,ten|min:3|max:50'
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên thể loại','ten.unique'=>'Tên thể loại đã tồn tại','ten.min'=>'Tên thể loại phải có độ dài 3 đến 100 ký tự','ten.max'=>'Tên thể loại nhiều nhất 50 ký tự',
            ]);
        $theloaitin->ten = $request->ten;
        $theloaitin->ten_khong_dau = changeTitle($request->ten);
        $theloaitin->save();

        return redirect('admin/theloaitin/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $theloaitin = TheLoaiTin::find($id);
        $theloaitin->delete();

        return redirect('admin/theloaitin/danhsach')->with('thongbao','Bạn đã xóa thành công');

    }
}
