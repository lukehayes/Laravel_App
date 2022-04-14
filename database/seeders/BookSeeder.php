<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->buildBook("Effective C++", "C++");
        $this->buildBook("C++ Primer", "C++");
        $this->buildBook("Eloquent Ruby", "Ruby");
        $this->buildBook("PHP Master", "PHP");
        $this->buildBook("Programming Rust", "Rust");

        for($i = 0; $i <=10; $i++)
        {
            $this->buildBook("Delete Me {$i}", "No Language");
        }
    }

    private function buildBook(string $title, string $language)
    {
        $book = new Book();
        $book->title = $title;
        $book->language = $language;
        $book->save();
    }
}
