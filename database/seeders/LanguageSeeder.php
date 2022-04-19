<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->buildLanguage("PHP");
        $this->buildLanguage("C++");
        $this->buildLanguage("Java");
        $this->buildLanguage("Python");
        $this->buildLanguage("Ruby");
        $this->buildLanguage("Haskell");
    }

    private function buildLanguage(string $language)
    {
        $book = new Language();
        $book->language = $language;
        $book->save();
    }
}
