<?php
declare (strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'product_type', 'quantity'];

    protected $casts = [
        'product_id' => 'integer',
        'product_type' => 'string',
        'quantity' => 'integer',
    ];

    public function product(): MorphTo
    {
        return $this->morphTo();
    }
}
