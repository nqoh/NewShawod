<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';

    const UPDATED_AT = null;

    protected  $fillable = ['email','token','created_at'];
}
