<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touttype extends Model
{
    protected $table = 'touttype';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['caractere','nombre','daty','times','datytime','texte','image'];
}
