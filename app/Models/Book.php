<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Book extends Model
{
    use HasFactory;

    protected $fillable = array(
        'created_by_user_id',
        'updated_by_user_id',
        'id',
        'title',
        'language_id',
        // The rest of the column names that you want it to be mass-assignable.
    );

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Attribute so $book->language works correctly.
     *
     * @return int
     */
    public function getLanguageAttribute()
    {
        // TODO There are better ways to do this but I want it to work first.
        $language = Language::find($this->language_id);
        return $language->language;
    }
}
