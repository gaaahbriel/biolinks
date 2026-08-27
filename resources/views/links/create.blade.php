<x-layout.app>
<div>
    <h1>Criar um link</h1>

    @if($message = session()->get('message'))
    <p>{{ $message }}</p>
    @endif

    <form action="{{ route('links.create') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="link" placeholder="Link" value="{{ old('link') }}">
            @error('link')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit">Criar um link</button></div>
    </form>
</div>
</x-layout.app>