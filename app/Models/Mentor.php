<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'experience',
        'passport_photo',
        'isVerifed'
    ];


    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function songsForScore()
    {
        return $this->belongsToMany(Song::class)->withPivot('score');
    }
}
