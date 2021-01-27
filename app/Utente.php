<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = 'users';//<---nome della tabella all'interno del db
              //<---la variabile $table deve chiamarsi proprio $table
}
