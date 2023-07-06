<?php

namespace App\Models;

use App\Models\User as User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lead extends Model
{
    use HasFactory;

    protected $guarded = [
        "updated_at",
        "created_at",
    ];

    protected $casts = [
        "dob" => "datetime",
    ];

    public function user(){
        return $this->belongsTo(User::class, 'userID', 'id');
    }
    public function company(){
        return $this->hasOne(Company::class, 'id', 'companyID');
    }

}
