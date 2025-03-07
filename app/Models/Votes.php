<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use HasFactory;
    protected $fillable = ['contact_id', 'vote_count'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
