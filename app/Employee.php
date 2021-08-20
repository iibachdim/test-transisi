<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nama', 'company_id', 'email'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
