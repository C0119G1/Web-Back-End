<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){
        $city = new City();
        $city->id = 17;
        $city->name = 'Hà Nội';
        $city->save();

        $city = new City();
        $city->id = 18;
        $city->name = 'Hồ Chí Minh';
        $city->save();

        $city = new City();
        $city->id = 19;
        $city->name = 'Hải Phòng';
        $city->save();

        $city = new City();
        $city->id = 20;
        $city->name = 'Hải Dương';
        $city->save();
    }
}
