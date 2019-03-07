<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\City;
class CityController extends Controller
{
    protected $City;

    public function __construct(City $City)
    {
        $this->City = $City;
    }

    public function index()
    {
        $listcities = $this->City->get();
        return view('City.index', compact('listcities'));
    }

    public function add()
    {
        return view('city.create');
    }

    public function store(request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('City.index');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('City.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->name = $request->input('name');
        $city->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //cap nhat xong quay ve trang danh sach tinh
        return redirect()->route('City.index');
    }
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        //xoa khach hang thuoc tinh thanh nay
        $city->customers()->delete();
        $city->delete();
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa  thành công');
        //cap nhat xong quay ve trang danh sach tinh thanh
        return redirect()->route('City.index');
    }
}

