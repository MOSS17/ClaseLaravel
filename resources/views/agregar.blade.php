@extends('layout'); @section('content');
<main class="content">
    <div class="cards">
        <div class="card card-center">
            <div class="card-body">
                <h1>Nueva nota</h1>

                <form method="POST" action="{{ url('crear') }}">
                    @csrf
                    <label for="title" class="field-label">Título: </label>
                    <input type="text" name="title" id="title" class="field-input">
                    @error('title')
                        <p class="error-message">{{ $message }}</p>
                    @enderror

                    <label for="content" class="field-label">Contenido:</label>
                    <textarea name="content" id="content" rows="10" class="field-textarea"></textarea>
                    @error('content')
                        <p class="error-message">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="btn btn-primary">Crear nota</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection