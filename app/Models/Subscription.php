<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function application_status()
    {
        return $this->belongsTo(ApplicationStatus::class);
    }

    public function compliance_status()
    {
        return $this->belongsTo(ComplianceStatus::class);
    }

    public function add_payment($payment)
    {
        return $this->payments()->create($payment);
    }
}
