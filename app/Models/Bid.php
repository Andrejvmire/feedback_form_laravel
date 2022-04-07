<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "name",
        "phone",
        "company",
        "message",
        "user_id",
        "file_name"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
