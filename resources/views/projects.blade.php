

@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div style="text-align: center; padding: 2em;">
        <h1>Projects</h1>

        @foreach($projects as $project)
            <div style="margin-bottom: 20px;">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
            </div>
        @endforeach
    </div>

