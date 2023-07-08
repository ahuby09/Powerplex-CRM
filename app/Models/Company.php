<?php

namespace App\Models;
use App\Models\User;
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


    public function users()
    {
        return $this->hasMany(User::class, 'companyID', 'id');
    }
}
