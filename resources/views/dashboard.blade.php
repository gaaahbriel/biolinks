<x-layout.app>
    <div>
    <h1>Dashboard</h1>
    <h2>Bem-vindo, {{ auth()->user()->name }} :: id {{ auth()->user()->id }}</h2>
    <a href="{{ route('profile') }}">Atualizar Profile</a>


    @if($message = session()->get('message'))
    <p>{{ $message }}</p>
    @endif

    <a href="{{ route('links.create') }}">Criar novo link</a>

    <ul>
        @foreach ($links as $link)
        <li style="display: flex" ;>
            @unless ($loop->last)
            <form action="{{ route('links.down', $link) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">🔽</button>
            </form>
            @endunless
            @unless ($loop->first)
            <form action="{{ route('links.up', $link) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">🔼</button>
            </form>
            @endunless
            <a href="{{ route('links.edit', $link) }}">
                {{$link->id}} - {{ $link->name }}
            </a>
            <form action="{{ route('links.destroy', $link) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este link?');">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
</x-layout.app>