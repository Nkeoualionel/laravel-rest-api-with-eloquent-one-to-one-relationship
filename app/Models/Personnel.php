<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = ["nom", "prenom", "telephone", "role_id"];


    public function role() {
        
        return $this->belongsTo(Role::class);
    }
}
