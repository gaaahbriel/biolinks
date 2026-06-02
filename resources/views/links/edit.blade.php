<div>
    <h1>Editar um link :: {{ $link->name }}</h1>

    @if($message = session()->get('message'))
    <p>{{ $message }}</p>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link', $link->link) }}">
            @error('link')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name', $link->name) }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit">Salvar</button></div>
    </form>
</div>