<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingManage extends Model
{
    use HasFactory;

    public function Vehicle(){

        return $this->belongsTo(VehicleManage::class,'vehicle_id','id');
    }
}
