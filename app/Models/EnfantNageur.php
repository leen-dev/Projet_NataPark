<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnfantNageur extends Model
{

    use HasFactory;

    protected $fillable =[
        'nom',
        'prenoms',
        'nom_du_parent',
        'prenoms_du_parent',
        'email',
        'programme_de_lenfant',
    ];

}
