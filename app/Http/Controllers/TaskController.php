<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    private $tasks;

public function __construct() {

    $this->tasks = collect([
        ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
        ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]])
        ->keyBy('id');
}

    //

 public function index()
    {
        return view("task.index")->with("tasks", $this->tasks);
    }


    public function show()
    {
        return view("task.show")->with("tasks", $this->tasks);
    }

public function create()
    {
        return view("task.create");
    }
public function store(Request $request)
    {
        dd($request->all());

    }
}
