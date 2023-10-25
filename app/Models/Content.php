<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'link',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($query, $req){
        $query->where(function ($query) use ($req){
            $query->where('name','like', '%' . $req . '%');
        });
    }
}
