<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function cryptocurrencies() {
        return $this->belongsToMany(Cryptocurrency::class, 'crypto_tag', 'tag_id', 'crypto_id');
    }
}
