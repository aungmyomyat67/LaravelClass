@extends('layouts.master')

@section('title', 'Create Article')

@section('content')

<h2 class="text-2xl font-bold mb-4">Create Article</h2>

{{-- Success Message --}}
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

{{-- Validation Errors (Global) --}}
@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf

    {{-- Title --}}
    <div class="mb-4">
        <label class="block font-semibold">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"
            class="w-full border p-2 rounded">
        @error('title')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Body --}}
    <div class="mb-4">
        <label class="block font-semibold">Body</label>
        <textarea name="body" class="w-full border p-2 rounded">{{ old('body') }}</textarea>
        @error('body')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    {{-- Category --}}
    <div class="mb-4">
        <label class="block font-semibold">Category ID</label>
        <input type="number" name="category_id" value="{{ old('category_id') }}"
            class="w-full border p-2 rounded">
        @error('category_id')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Save Article
    </button>
</form>

@endsection