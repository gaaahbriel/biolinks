<x-layout.app>
    <div>
    <h1>Profile</h1>

    @if($message = session()->get('message'))
    <p>{{ $message }}</p>
    @endif

    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <img src="{{ $user->photo ? asset('/storage/' . $user->photo) : asset('images/default-avatar.png') }}" alt="Profile Photo" width="100">
            <input type="file" name="photo">
            @error('photo')
            <p>{{ $message }}</p>
            @enderror

        <div>
            <input type="text" name="name" placeholder="Nome" value="{{ old('name', $user->name) }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <textarea name="description" placeholder="Breve resumo">{{ old('description', $user->description) }}</textarea>
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <span>www.biolinks.com.br/</span>
            <input type="text" name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}">
            @error('handler')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <a href="{{ route('dashboard') }}">Back to Dashboard</a>
        <div><button type="submit">Update Profile</button></div>
    </form>
</div>
</x-layout.app>