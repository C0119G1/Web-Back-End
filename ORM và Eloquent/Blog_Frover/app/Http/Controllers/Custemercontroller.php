<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\customer;
use App\City;

class Custemercontroller extends Controller
{
    protected $customer;

    public function __construct(customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $listcustomer = $this->customer->paginate(3); //Khi lấy phân trang thì tự động hiểu là dùng hàm get().Đương tương với dòng lệnh  $listcustomer = $this->customer->get()
        return view('customer.index', compact('listcustomer'));
    }

    public function create()
    {
        $customer = City::all();
        return view('customer.create', compact('customer'));
    }
    public function store(Request $request) {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->NgaySinh = $request->input('NgaySinh');
        $customer->city_id = $request->input('city_id');
        $customer->save();
        Session::flash('success', 'Tạo mới khách hàng thành công');
        return redirect()->route('customer.index');
    }
    public function edit($id) {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->Ngaysinh = $request->input('Ngaysinh');
        $customer->save();


        Session::flash('success', 'Cập nhật khách hàng thành công');

        return redirect()->route('customer.index');
    }
    public function destroy($id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('customer.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customer.index');
        }
        $listcustomer = Customer::where('name', 'LIKE', '%' . $keyword . '%')  // nhớ biến $listcustomer đã có khai ở trên. Khi dùng chỉ lấy dùng
            ->paginate(2);
        $cities = City::all();
        return view('customer.index', compact('listcustomer', 'cities'));


    }

}








