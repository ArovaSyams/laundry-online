<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatList extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search-top'] ?? false, function ($query, $search) {
            return $query->where('kabupaten', 'like', '%' . $search . '%');
        });
    }
}
