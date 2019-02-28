<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CustomerController extends Controller {
	public function getIndex(Store $store) {
		if (!$store->has('customers')) {
			$customers = [
				[
					'id' => 1,
					'name' => 'Trần Mạnh Long',
					'phone' => '0776914759',
					'email' => 'manhlong99@gmail.com',
				],

			];

			$store->put('customers', $customers);

		} else {
			$customers = $store->get('customers');
		}

		$description = "Danh Sách Khách Hàng";
		return view('customer.index', compact(['description', 'customers']));
	}

	public function showFormAdd() {
		$NumberCustomer = "Thêm khách hàng";
		return view('customer.AddCustomer', compact(['NumberCustomer']));
	}

	public function add(Store $store, Request $request) {
		$description = "Danh Sách khách hàng";

		$customers = $store->get('customers');

		$id = $request->id;
		$name = $request->name;
		$phone = $request->phone;
		$email = $request->email;

		array_push($customers, [
			'id' => $id,
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
		]);
		$store->put('customers', $customers);
		return redirect()->route('customer.index');
	}

}
