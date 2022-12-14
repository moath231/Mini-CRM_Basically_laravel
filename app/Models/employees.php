<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName','lastName','companyId','email','phone'
    ];

    public function companys(){
        return $this->belongsTo(companymodel::class);
    }
}
