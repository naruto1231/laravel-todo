<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // ← ここに追加！！
    protected $fillable = ['title', 'completed'];
}
