<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Tutorial;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $this->validate($request, [
            'body'=>'required'
        ]);

        $comment->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Custom methods
    public function store_chapter_comment(Request $request, Tutorial $chapter) {
        $this->validate($request, [
            'body'=>'required'
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->body = $request->body;
        
        $chapter->comments()->save($comment);

        return back();
    }
}
