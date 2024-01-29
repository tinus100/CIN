<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'voornaam', 'achternaam', 'geslacht', 'postcode', 'adres', 'stad', 'verwijzer', 'email'
    ];

    public function path()
    {
        return route('registration.show', $this);
    }
}
