<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','adresse','societe','email','tel','cretaed_at','updated_at',
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
