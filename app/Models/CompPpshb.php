<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompPpshb extends Model
{
    use HasFactory;
    protected $table = 'comp_ppshb';
    protected $primaryKey = 'id_comp_ppshb';
    protected $guarded = [];
}
