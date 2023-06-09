<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;
    public function tasks(){
        return $this->hasManyThrough(Task::class, Project::class, 'user1s_id', 'id');
    }
}
