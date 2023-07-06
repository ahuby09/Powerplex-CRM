<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [
        "updated_at",
        "created_at",
        "companyID",
        "name",
    ];


    public function user(){
        $this->hasMany(User::class, 'UserID', 'id');
    }
}
