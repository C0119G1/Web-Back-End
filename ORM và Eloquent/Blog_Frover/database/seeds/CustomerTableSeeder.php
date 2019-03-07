<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id   = 4;
        $customer->name = "Lê Lợi";
        $customer->NgaySinh  = "2017-05-22";
        $customer->email  = "leloi@gmail.com";
        $customer->city_id  = 3;
        $customer->save();

        $customer = new Customer();
        $customer->id   = 5;
        $customer->name = "Nguyễn Trãi";
        $customer->NgaySinh  = "2016-01-24";
        $customer->email  = "nguyenkhuyen@gmail.vn";
        $customer->city_id  = 4;
        $customer->save();

        $customer = new Customer();
        $customer->id   = 6;
        $customer->name = "Phan Chu Trinh";
        $customer->NgaySinh  = "2011-03-26";
        $customer->email  = "chutrinh@gmail.com";
        $customer->city_id  = 1;
        $customer->save();
    }
}


