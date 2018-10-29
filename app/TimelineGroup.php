<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Timeline;

class TimelineGroup extends Model
{
    //
    protected $guarded = [];

    public function timelines(){
        return $this->hasMany(Timeline::class);
    }
}
