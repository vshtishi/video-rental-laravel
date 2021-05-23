<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCategories extends Model
{
    use HasFactory;

    protected $table = 'video_categories';

    public function video() {
        return $this->belongsTo('App\Models\Video');
    }
}
