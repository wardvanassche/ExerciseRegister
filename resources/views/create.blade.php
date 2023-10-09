@extends('layouts.app')

@section('content')
    <form action="{{ route('exercises.store') }}" method="post">

        @csrf

        <div class="mb-3 w-25 m-auto">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="e.g. bench press"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Category</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option value="" selected disabled>Please select</option>
                <option value="1">Chest</option>
                <option value="2">Back</option>
                <option value="3">Shoulders</option>
                <option value="4">Quads</option>
                <option value="5">Hamstring</option>
                <option value="6">Glutes</option>
                <option value="7">Calves</option>
            </select>
        </div>
        <div class="mb-3 w-25 m-auto">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
