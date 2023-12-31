<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate',
        'is_active',
        'agent_id',
        'profile_photo_url',
    ];
}
