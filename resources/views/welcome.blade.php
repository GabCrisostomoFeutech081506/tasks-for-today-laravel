@extends('layouts.app')
@section('title', 'Today')
@section('content')
<div class="eyebrow">{{ now()->format('l, F j, Y') }}</div><h1>Today's tasks</h1><p class="lead">A clear view of what needs your attention today.</p>
@forelse($tasks as $task)
<div class="card task"><div><h2>{{ $task->title }}</h2><span class="muted">Due today</span></div><span class="badge {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></div>
@empty
<div class="card empty">No tasks scheduled for today.</div>
@endforelse
@endsection
