<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $with=["task"];

    protected $fillable=["name"];

    public function tasks(){
        return $this->hasMany("App\Models\Task");
    }
}

