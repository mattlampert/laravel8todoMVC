<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    //protected $fillable = ['_token'];
    use HasFactory;

protected $fillable=['name'];

    public function project(){
        return $this->belongsTo("App\Models\Project");
    }


}
