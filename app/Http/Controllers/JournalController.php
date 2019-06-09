<?php

namespace App\Http\Controllers;

use App\Author;
use App\Upload;
use App\Journal;
use App\Bibliography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('journals.view');
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

        $journal = new Journal();

        $journal->title = $request->title;
        $journal->publish_date = $request->publish_date;
        $journal->category = $request->category;
        $journal->journal_category = $request->journal_cat;
        $journal->issn_isbn_no = $request->issn_isbn_no;
        $journal->impact_factor = $request->impact_factor;
        $journal->fac_id    = Auth::user()->fac_id;

        $journal->save();

        for($i=0; $i <count($request->author); $i++) {
            if($request->author[$i]){
                $author = new Author();
                $author->category = "journal";
                $author->name = $request->author[$i];
                $author->work_id = $journal->id;
                $author->save();
            }
        }

        $bibliography = new Bibliography();
            if($request->vol){$bibliography->vol = $request->vol;}
            if($request->issue){$bibliography->issue = $request->issue;}
            if($request->page){$bibliography->page = $request->page;}
        $bibliography->category = "journal";
        $bibliography->work_id = $journal->id;
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
        $upload->category = "journal";
        $upload->work_id = $journal->id;
        $upload->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        //
    }
}
