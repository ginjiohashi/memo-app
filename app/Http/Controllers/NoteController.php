<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

use function Laravel\Prompts\title;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $notes = $user->notes;

        return view('notes.index', [
            'notes' => $notes,
        ]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $note = new Note;
        $note->title = $validated['title'];
        $note->content = $validated['content'];
        $request->user()->notes()->save($note);

        return redirect()->route('notes.index');
    }

    public function show(Note $note)
    {
        return view('notes.show', [
            'note' => $note,
        ]);
    }

    public function edit(Note $note)
    {
        return view('notes/edit', [
            'note' => $note,
        ]);
    }

    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $note->title = $validated['title'];
        $note->content = $validated['content'];
        $note->save();
        return redirect()->route('notes.show', $note);
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index');
    }
}
