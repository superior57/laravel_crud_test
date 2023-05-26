<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alergy;
use App\Models\Food;

class Eat extends Model
{
    use HasFactory;

    protected $table = 'eat';

    protected $fillable = [
        'id', 'food_id', 'alergy_id'
    ];

    public function alergy()
    {
        return $this->belongsTo(Alergy::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
