<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $guarded = ['id', 'user_id', 'created_at'];
    
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}