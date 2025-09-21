<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class DuoRequest extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'game',
        'server',
        'discord_link',
        'status',
    ];

    // Relationship: A duo request belongs to a requester (user)
    public function requester()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship: A duo request can have many accepted requests
    public function acceptedRequests()
    {
        return $this->hasMany(AcceptedRequest::class);
    }
}
