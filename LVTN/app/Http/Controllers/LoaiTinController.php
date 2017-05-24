<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\loaiTin;
use App\TheLoaiTin'

class LoaiTinController extends Controller
{
    //
    public function getDanhSach()
    {
        $loaitin = loaiTin::all();
    	return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    public function getThem()
    {
        return view('admin.loaitin.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'ten'=>'required|min:3|max:50|unique:loai_tin,ten'
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên thể loại',
                'ten.min'=>'Tên thể loại phải có độ dài 3 đến 100 ký tự',
                'ten.max'=>'Tên thể loại nhiều nhất 50 ký tự',
                'ten.unique'=>'Tên thể loại đã tồn tại',
            ]);

        $loaitin = new LoaiTin;
        $loaitin->ten = $request->ten;
        $loaitin->ten_khong_dau = changeTitle($request->ten);
        $loaitin->save();
        return redirect('admin/loaitin/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $loaitin = loaitin::find($id);
        return view('admin.loaitin.sua',['loaitin'=>$loaitin]);
    }
    public function postSua(Request $request,$id)
    {
        $loaitin = LoaiTin::find($id);
        $this->validate($request,
            [
                'ten'=>'required|unique:loai_tin,ten|min:3|max:50'
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên thể loại','ten.unique'=>'Tên loại tin đã tồn tại','ten.min'=>'Tên loại tin phải có độ dài 3 đến 100 ký tự','ten.max'=>'Tên loại tin nhiều nhất 50 ký tự',
            ]);
        $loaitin->ten = $request->ten;
        $loaitin->ten_khong_dau = changeTitle($request->ten);
        $loaitin->save();

        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $loaitin = LoaiTin::find($id);
        $loaitin->delete();

        return redirect('admin/loaitin/danhsach')->with('thongbao','Bạn đã xóa thành công');

    }
}
