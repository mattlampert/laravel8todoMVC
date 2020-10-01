@extends("layout")

@section("content")
<h1>New task</h1>

<form method="POST" action="{{route('tasks.store')}}">

@csrf

<label>Add task</label>
<input type="text" name="input-text"/>
<button type="submit">Save the task</button>
<a href="{{route('tasks.index')}}">Return to index</a>

</form>

@endsection
