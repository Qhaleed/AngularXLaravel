<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class DuoRequest extends Model
{


    // public function index()
    // {
    //     $duoRequests = DuoRequest::all();
    //     return view('index', compact('duoRequests'));
    // }


     use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'game',
        'server',
        'discord_tag',
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

    public function user(): BelongsTo
    {
        return $this->belongsTo (User::class);
    }
}
