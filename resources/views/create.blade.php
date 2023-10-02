@extends('layouts.app')

@section('content')
    <form action="" method="post">

        @csrf

        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="e.g. bench press">
        </div>
        <div class="mb-3 w-25 m-auto">
            <label for="" class="form-label">Category</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example">
                <option value="" selected disabled>Please select</option>
                <option value="1">Chest</option>
                <option value="2">Back</option>
                <option value="3">Shoulders</option>
                <option value="3">Quads</option>
                <option value="3">Hamstring</option>
                <option value="3">Glutes</option>
                <option value="3">Calves</option>
            </select>
        </div>
        <div class="mb-3 w-25 m-auto">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
