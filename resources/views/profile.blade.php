@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="eyebrow">Account</div><h1>Profile</h1><p class="lead">The person behind this task list.</p>
<div class="card profile"><div><div class="label">Username</div><div class="value">{{ $user->username }}</div></div><div><div class="label">Full name</div><div class="value">{{ $user->full_name }}</div><div class="label">Email</div><div class="value">{{ $user->email }}</div></div></div>
@endsection
