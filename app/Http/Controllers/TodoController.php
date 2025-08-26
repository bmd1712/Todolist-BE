<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json(Todo::all());
    }

    public function store(Request $request)
    {
        // validate trước cho chắc
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $todo = Todo::create([
            'content' => $request->content,
            'is_completed' => false,
        ]);

        return response()->json($todo);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        // validate dữ liệu update
        $validated = $request->validate([
            'content' => 'sometimes|string|max:255',
            'is_completed' => 'sometimes|boolean',
        ]);

        $todo->update($validated);

        return response()->json($todo);
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        return response()->json([
            'message' => 'Todo deleted successfully',
            'id' => $id
        ]);
    }

}
