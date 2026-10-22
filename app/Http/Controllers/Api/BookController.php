<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; // Pastikan meng-extend Controller dengan benar
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan semua book
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    // Menyimpan book baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string', // Diubah ke nullable agar sinkron dengan migration Anda sebelumnya
            'status' => 'nullable|integer',    // Diubah ke nullable & integer agar sesuai dengan database
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    // Menampilkan satu book berdasarkan ID
    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book, 200);
    }

    // Memperbarui book
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        // Sebaiknya gunakan validasi juga saat update agar data tetap aman
        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'description' => 'nullable|string',
            'status' => 'nullable|integer',
        ]);

        $book->update($validated);
        return response()->json($book, 200);
    }

    // Menghapus book
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        
        $book->delete();
        return response()->json(['message' => 'Book deleted'], 200);
    }
}
