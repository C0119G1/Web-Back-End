<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
        public function customers(){
            return $this->hasmany('App\Customer');
        }
}
