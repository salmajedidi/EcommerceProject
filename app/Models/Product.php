<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','categorie','fournisseur','price','quantity','image','description',' cretaed_at','updated_at'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }
    public function fournisseur()
    {
        return $this->belongsTo('App\Models\fournisseur','fournisseur_id');
    }
}
