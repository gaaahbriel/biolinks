<x-layout.app>
<div>
    <img src="{{ $user->photo ? asset('/storage/' . $user->photo) : asset('images/default-avatar.png') }}" alt="Profile Photo" width="100">
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