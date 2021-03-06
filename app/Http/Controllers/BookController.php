<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
        return view('adminbook.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $books = Book::pluck('name','name')->all();
        return view('adminbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'rating' => 'required',
            'volume' => 'required',
            'status' => 'required',
            'img' => 'required',
            'slideimg' => 'required',
            'readSrc' => 'required',
        ]);

        // $input = $request->all();

        Book::create($request->all());

        return redirect()->route('books.index')
                        ->with('success','Book created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        // return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('adminbook.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request -> validate([

        ]);

        $book->update($request->all());
            return redirect()->route('books.index')
            ->with('success', 'Book Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book ->delete();
        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
