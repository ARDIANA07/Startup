<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'name',
        'harga',
        'foto',
    ];

    public function detailcategory(): BelongsTo
    {
        return $this->belongsTo(DetailCategory::class);
    }
}