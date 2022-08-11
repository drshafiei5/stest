<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['mentor_id', 'name'];

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }


    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
