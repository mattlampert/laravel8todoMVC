Task list

<ul>
<a href="{{route('tasks.create')}}">Create a task</a>
@foreach($tasks as $task)
<li><a href="{{route('tasks.show', ['task'=>$task['id'] ] )}}"> #{{ $task["id"]}} - {{ $task["name"] }}
</li>
@endforeach
</ul>
