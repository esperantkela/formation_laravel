<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable =  [
        'description',
        'picture',
        'user_id'
    ];

    public function user() :BelongsTo
    {
        $this->belongsTo(User::class);
    }


}
