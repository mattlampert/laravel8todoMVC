<?php

namespace App\Http\Controllers;

use App\Models\Task;
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


    public function show($task)
    {
$task = Task::find($task);
        return view("task.show")->with("task", $task);
    }

public function create()
    {
        return view("task.create");
    }
public function store(Request $request)
    {
        $task = Task::create($request->all());
        return view("task.show")->with("task", $task);

    }

    public function destroy($task){
        $task= Task::find($task);
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
