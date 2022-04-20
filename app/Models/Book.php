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
}
