<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractitionerEmployment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class);
    }
}
