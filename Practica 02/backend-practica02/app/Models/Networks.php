<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Networks extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
        ,'url'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
