<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Upload;
use App\Bibliography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book->title = $request->title;
        $book->publish_date = $request->publish_date;
        // $book->category = $request->category;
        $book->book_category = $request->book_cat;
        $book->issn_isbn_no = $request->issn_isbn_no;
        // $book->impact_factor = $request->impact_factor;
        $book->fac_id   = Auth::user()->fac_id;

        $book->save();

        for($i=0; $i <count($request->author); $i++) {
            if($request->author[$i]){
                $author = new Author();
                $author->category = "book";
                $author->name = $request->author[$i];
                $author->work_id = $book->id;
                $author->save();
            }
        }

        $bibliography = new Bibliography();
            if($request->vol){$bibliography->vol = $request->vol;}
            if($request->issue){$bibliography->issue = $request->issue;}
            if($request->page){$bibliography->page = $request->page;}
        $bibliography->category = "book";
        $bibliography->work_id = $book->id;
        $bibliography->save();


        // $file = $request->file('upload');
        // dd($file->getRealPath());

        $upload = new Upload();
            if($request->url){$upload->url = $request->url;}

            if(Input::hasFile('upload')){
            
                $file = Input::file('upload');
                $info = pathinfo(storage_path().$file->getClientOriginalName());
                $ext = $info['extension'];
                // return $ext;
                
                $file->move(public_path().'/uploads//',date('m-d-Y_H-i-s').'_'.$request->title.'.'.$ext);
                $domain = $_SERVER['SERVER_NAME'];

                $upload->filename = 'uploads/'.date('m-d-Y_H-i-s').'_'.$request->title.'.'.$ext; 

            }
        $upload->category = "book";
        $upload->work_id = $book->id;
        $upload->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
