<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $book = new Book();
        $book->user_id = 1;
        $book->author = 'Aji';
        $book->title = 'Belajar laravel';
        $book->save();
        $book = new Book();
        $book->user_id = 1;
        $book->author = 'Aji';
        $book->title = 'Belajar laravel';
        $book->save();
        //user
        $book = new Book();
        $book->user_id = 2;
        $book->author = 'Rengganis Ayu';
        $book->title = 'Belajar laravel';
        $book->save();
        $book = new Book();
        $book->user_id = 2;
        $book->author = 'Rengganis Ayu Mayangsari';
        $book->title = 'Belajar laravel';
        $book->save();
        $book = new Book();
        $book->user_id = 3;
        $book->author = 'Ayu M';
        $book->title = 'Belajar laravel';
        $book->save();
        $book = new Book();
        $book->user_id = 3;
        $book->author = 'Ayu Mayangsari';
        $book->title = 'Belajar laravel';
        $book->save();
    }
}
