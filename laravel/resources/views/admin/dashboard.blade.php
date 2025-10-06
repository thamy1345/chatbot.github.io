@extends('layouts.app')

@section('content')
<div class="grid grid-3">
  <div class="card">
    <h2>Health</h2>
    <pre>{{ json_encode($health, JSON_PRETTY_PRINT) }}</pre>
  </div>
  <div class="card">
    <h2>Stats</h2>
    <pre>{{ json_encode($stats, JSON_PRETTY_PRINT) }}</pre>
  </div>
  <div class="card">
    <h2>Recent Conversations</h2>
    <pre>{{ json_encode($conversations, JSON_PRETTY_PRINT) }}</pre>
  </div>
</div>
@endsection
