<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function questionChoices()
    {
        return $this->hasMany('App\Models\QuestionChoice');
    }
}
