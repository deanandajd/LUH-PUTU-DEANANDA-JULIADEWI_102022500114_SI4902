<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_0114' => 'required',
            'isbn_0114' => 'required',
            'tahun_terbit_0114' => 'required|numeric',
            'pengarang_0114' => 'required',
            'kategori_0114' => 'required',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_0114' => 'required',
            'isbn_0114' => 'required',
            'tahun_terbit_0114' => 'required|numeric',
            'pengarang_0114' => 'required',
            'kategori_0114' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}