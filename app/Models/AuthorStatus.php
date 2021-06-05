<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
