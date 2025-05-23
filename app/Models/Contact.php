<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'age',
        'occupation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasOne(Votes::class);
    }
}
