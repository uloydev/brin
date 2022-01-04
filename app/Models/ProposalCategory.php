<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalCategory extends Model
{
    use HasFactory;

    public function proposals()
    {
        return $this->hasMany('App\Models\Proposal');
    }
}
