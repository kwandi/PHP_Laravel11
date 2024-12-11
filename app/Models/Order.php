<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id'); //Thiết lập mối quan hệ 1-1 (Dùng phương thức hasOne)
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product','id','product_id');
    }
}
