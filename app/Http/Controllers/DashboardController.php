<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $books = Book::with('users');
        if (auth()->user()->roles == 'admin') {
            $books = $books;
        } else {
            $books = $books->where('user_id', \auth()->user()->id);
        }
        $books = $books->get();
        return view('dashboard', \compact('books'));
    }
}
