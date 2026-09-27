<?php

namespace App\Models;

use Database\Factories\ManufacturerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class Manufacturer extends Model
{
    /** @use HasFactory<ManufacturerFactory> */
    use HasFactory;

    /**
     * Get the products for the manufacturer.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
