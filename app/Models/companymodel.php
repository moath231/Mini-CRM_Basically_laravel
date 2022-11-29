<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companymodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','Email','Address','website','logo_path'
    ];

    public function Employee(){
        return $this->hasMany(employees::class);
    }
}
