<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NoteappController extends Controller
{
    public function shownote(){
        return view('NoteApp.createnote');
    }

    public function addNote(Request $req){
        $newname=time().$req->image->getClientOriginalName();
        $move=$req->image->move(public_path('images'),$newname);
        if($move){
            $insert = DB::table("note_app")->insert([
                'title' => $req->title,
                'content' => $req->content,
                'created_at' => date('Y-m-d H:i:s'),
                'user_id' => Auth::user()->id,
                'user_img' => $newname
            ]);

            if ($insert) {
                return redirect('/displaynote');
            } else {
                return ('Error Occured');
            }
        }else{
            return 'Image not uploaded';
        }
        // return view('noteapp.createnote');
    }

    public function displayNote(){
        $select = DB::table('note_app')->where('user_id', Auth::user()->id)->get();
        return view('NoteApp.displaynote', ['allNotes' => $select]);
    }
    
    public function show($id)
    {
        // $show = DB::table('note')->where('note_id', $id)->get();
        $show = DB::table('note_app')->where('note_id', $id)->first();
        // return $show;
        return view('Noteapp.view', ['note' => $show]);
    }

    public function edit($id)
    {
        $show = DB::table('note_app')->where('note_id', $id)->first();
        return view('Noteapp.edit', ['note' => $show]);
    }

    public function update(Request $req, $id)
    {
        // return $id;
        $show = DB::table('note_app')->where('note_id', $id)->first();
        $update = DB::table('note_app')->where('note_id', $id)->update([
            'title' => $req->title,
            'content' => $req->content
        ]);
        // return $update;
        if ($update) {
            // return view('Noteapp.view', ['note' => $show]);
            return redirect("/createnote/{$id}");
        }else {
            return view('Noteapp.edit', ['note' => $show]);
        }
    }

    public function delete($id)
    {
        $show = DB::table('note_app')->where('note_id', $id)->first();
        $delete = DB::table('note_app')->where('note_id', $id)->delete();
        if ($delete) {
            return redirect("/displaynote");
        }else{
            return('Error Occured');
        }
        return view('Noteapp.edit', ['note' => $show]);
    }

    public function search(Request $req)
    {
        $search = $req->search;
        $select = DB::table('note_app')->where('title', 'like', '%'.$search.'%')->get();
        return view('Noteapp.displaynote', ['allNotes' => $select]);
    }
}