@extends('layouts.app')
@section('title', 'All Tasks')
@section('content')
<div class="eyebrow">Overview</div><h1>All tasks</h1><p class="lead">Every task, ordered by date.</p>
@forelse($tasks as $task)
<div class="card task"><div><h2>{{ $task->title }}</h2><span class="muted">{{ $task->task_date->format('M j, Y') }}</span></div><span class="badge {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></div>
@empty
<div class="card empty">No tasks have been added yet.</div>
@endforelse
@endsection
