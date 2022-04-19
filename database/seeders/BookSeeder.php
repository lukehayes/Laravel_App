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
        $this->buildBook("Effective C++");
        $this->buildBook("C++ Primer");
        $this->buildBook("Eloquent Ruby");
        $this->buildBook("PHP Master");
        $this->buildBook("Programming Rust");

        for($i = 0; $i <=10; $i++)
        {
            $this->buildBook("Delete Me {$i}", "No Language");
        }
    }

    private function buildBook(string $title)
    {
        $book = new Book();
        $book->title = $title;
        $book->language_id = rand(1,6);
        $book->save();
    }
}
