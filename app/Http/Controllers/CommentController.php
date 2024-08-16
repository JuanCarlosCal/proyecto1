<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CommentController extends Controller
{
    public function comment(): View
    {
        $comments=Comment::get();
        return view('comments.comment', ['comments'=> $comments]);
    }
    public function create(): View
    {
        return view('comments.create_or_edit');
    }
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:300',
        ]);

        Comment::create([
            'user_id' => auth()->user()->id, //$request->user()->id,
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        session()->flash('message','Comentario creado correctamente');

        return redirect()->route('comment');
    }

    public function edit(Comment $comment): View
    {
        return view('comments.create_or_edit')->with('comment', $comment);
    }

    public function update(Request $request, Comment $comment): RedirectResponse
    {
        $validated = $request->validate([
            'title' =>'required|string|max:100',
            'description' =>'required|string|max:300',
        ]);

        $comment->update($validated);

        session()->flash('message','Comentario actualizado correctamente');


        return redirect()->route('comment');
    }

    public function show(Comment $comment): View
    {
        return view('comments.show')->with('comment', $comment);
    }
    public function delete(Comment $comment): RedirectResponse
    {
        $comment->delete();

        session()->flash('message','Comentario eliminado correctamente');

        return redirect()->route('comment');
    }
}
