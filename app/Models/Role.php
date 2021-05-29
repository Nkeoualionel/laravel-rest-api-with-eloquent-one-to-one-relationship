<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personnel;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = ["label"];


    public function personnel() {
        
        return $this->hasOne(Personnel::class);
    }
}
