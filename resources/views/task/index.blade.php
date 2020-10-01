Task list

<ul>
<a href="{{route('tasks.create')}}">Create a task</a>
@foreach($tasks as $task)
<li><a href="{{route('tasks.show', ['task'=>$task['id'] ] )}}"> #{{ $task["id"]}} - {{ $task["name"] }}
</li>

<form method="POST" action="{{route('tasks.destroy'), ['task'=>$task->id]}}">
@csrf
@method('DELETE')
<input type="submit" title="Delete"/>
</form>

@endforeach
</ul>
