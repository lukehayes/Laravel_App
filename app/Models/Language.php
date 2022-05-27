<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Language extends Model
{
    use HasFactory;

    protected $fillable = array(
        'created_by_user_id',
        'updated_by_user_id',
        'language',
        'book_id',
        // The rest of the column names that you want it to be mass-assignable.
    );

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
