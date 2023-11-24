<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppshb extends Model
{
    use HasFactory;
    protected $table = 'ppshb';
    protected $primaryKey = 'id_ppshb';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_users');
    }
}
