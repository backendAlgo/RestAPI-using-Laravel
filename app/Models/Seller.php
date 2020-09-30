<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Seller extends User
{
    public function products() {
        $this->hasMany(Transaction::class);
    }
}
