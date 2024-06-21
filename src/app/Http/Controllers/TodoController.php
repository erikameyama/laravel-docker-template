<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
	public function index()
	{
		$todo = new Todo();
		$todoList = $todo->all();
		
		dd(view('todo.index', ['todoList' => $todoList]));
		return view('todo.index', ['todoList' => $todoList]);
	}

	public function create()
	{
    		return view('todo.create');
	}

	public function store(Request $request)
	{
			$inputs = $request->all();

			$todo = new Todo();
			$todo->fill($inputs); // 変更
			$todo->save();

			dd(route('todo.index'));
			return redirect()->route('todo.index');
	}
}
