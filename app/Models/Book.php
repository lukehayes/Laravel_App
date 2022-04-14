<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Book extends Model
{
    use HasFactory;

    public function language()
    {
        return $this->hasOne(Language::class);
    }
}
