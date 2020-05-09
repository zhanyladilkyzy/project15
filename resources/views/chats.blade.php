@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <chats :user="{{ Auth::user() }}"></chats>
</div>
@endsection

//
