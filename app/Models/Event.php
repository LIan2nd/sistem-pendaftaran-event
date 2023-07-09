<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) => $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );
        $query->when(
            $filters['EO'] ?? false,
            fn($query, $EO) => $query->whereHas(
                'EO',
                fn($query) => $query->where('username', $EO)
            )
        );
    }

    public function EO()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}