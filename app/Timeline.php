<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TimelineGroup;

class Timeline extends Model
{
    //
    protected $guarded = [];

    public function timelinegroup(){
        return $this->belongsTo(TimelineGroup::class,'group_id');
    }
}
