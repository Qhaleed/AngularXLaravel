<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'duo_request_id',
        'user_id',
    ];

    // Relationship: Accepted request belongs to a duo request
    public function duoRequest()
    {
        return $this->belongsTo(DuoRequest::class);
    }

    // Relationship: Accepted request belongs to the user who accepted it (the duo partner)
    public function acceptor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
