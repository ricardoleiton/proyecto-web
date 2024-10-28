@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('suggestion.store') }}" method="POST" class="suggestion-bar">
    @csrf
    <input type="text" name="suggestion" placeholder="Que te lugar te gustaría visitar..." required>
    <button type="submit">Sugerir</button>
</form>
