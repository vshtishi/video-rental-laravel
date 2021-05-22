<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    public function video() {
        return $this->belongsTo('App\Models\Video');
    }
}
