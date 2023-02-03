<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory; 
    protected $fillable = [
        'nomedaplanta',
        'descricao',
        'local',
        'datadoplantio',
        'user_id',
    ]; 

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
