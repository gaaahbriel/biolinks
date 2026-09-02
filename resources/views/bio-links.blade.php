<x-layout.app>
    <div>
        <x-img src="/storage/{{$user->photo}}" alt="Profile Photo" />
        <h2>User, {{ $user->name }} :: id {{ $user->id }}</h2>
        <p>{{ $user->description }}</p>
        <ul>
            @foreach ($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">">
                    {{$link->id}} - {{ $link->name }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>