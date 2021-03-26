<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    protected $table = 'messages';

    public $timestamps = false;

    protected $fillable = ['from_user', 'to_user', 'content'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
