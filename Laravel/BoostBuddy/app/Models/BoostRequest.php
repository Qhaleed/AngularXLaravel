<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoostRequest extends Model
{
    protected $fillable = ['task_name','task_game','task_server','task_status'];

    public function requester()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function acceptedRequests()
    {
        return $this->hasMany(AcceptedRequest::class);
    }
}

