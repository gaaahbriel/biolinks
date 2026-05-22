<div>
    <h1>Register</h1>

    @if($message = session()->get('message'))
    <p>{{ $message }}</p>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="email_confirmation" placeholder="Confirm Email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit">Register</button></div>
    </form>
</div>