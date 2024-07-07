@extends('layouts.app')

@section('title', 'list of tasks!')

@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks</div>
        {{-- @endif --}}
    @endforelse

    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
