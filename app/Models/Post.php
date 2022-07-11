<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{ 
    use softDeletes;
    protected $dates = ['deleted_at'];
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];
    public function user(){
        return $this-> belongsTo(\App\Models\User::class);
    }
}
