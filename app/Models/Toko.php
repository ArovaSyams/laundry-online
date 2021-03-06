<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search-top'] ?? false, function ($query, $search) {
            return $query->where('kota', 'like', '%' . $search . '%')->orWhere('nama_toko', 'like', '%' . $search . '%');
        });
    }

    public function komentar() 
    {
        return $this->hasMany(Komentar::class);
    }
    public function status() 
    {
        return $this->hasMany(Status::class);
    }
    public function order() 
    {
        return $this->hasMany(Order::class);
    }
    public function langganan() 
    {
        return $this->hasMany(Langganan::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
