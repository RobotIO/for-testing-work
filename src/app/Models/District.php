<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    
    public function locality()
    {
        return $this->belongsToMany(Locality::class);
    }
}
