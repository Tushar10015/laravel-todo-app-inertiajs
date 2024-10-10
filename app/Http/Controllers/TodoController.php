<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Auth::user()->todos()->orderBy('created_at', 'desc')->get();
        return Inertia::render('Todos/Index', ['todos' => $todos]);
    }

    public function create()
    {
        return Inertia::render('Todos/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Auth::user()->todos()->create($request->only('title', 'description'));

        return redirect()->route('todos.index');
    }

    public function edit(Todo $todo)
    {
        return Inertia::render('Todos/Edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $todo->update($request->only('title', 'description'));

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {

        $todo->delete();
        return redirect()->route('todos.index');
    }
}
