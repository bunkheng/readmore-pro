<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::orderBy('id','DESC')->paginate(5);
        return view('book.index',compact('books'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $books = Book::pluck('name','name')->all();
        return view('book.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'rating' => 'required',
            'volume' => 'required',
            'img' => 'required',
        ]);
    
        $input = $request->all();
    
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
        return view('book.edit',compact('book'));
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
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email,'.$id,
        //     'password' => 'same:confirm-password',
        //     'roles' => 'required'
        // ]);
    
        // $input = $request->all();
        // if(!empty($input['password'])){ 
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));    
        // }
    
        // $user = User::find($id);
        // $user->update($input);
        // DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        // $user->assignRole($request->input('roles'));
    
        // return redirect()->route('users.index')
        //                 ->with('success','User updated successfully');
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
