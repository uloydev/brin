<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'research_date' => 'date'
    ];

    public function proposalCategory()
    {
        return $this->belongsTo('App\Models\ProposalCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
