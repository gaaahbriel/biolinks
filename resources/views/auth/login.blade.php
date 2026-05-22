<div>
    <h1>Login</h1>

    @if($message = session()->get('message'))
        <p>{{ $message }}</p>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        <div>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit">Login</button></div>
    </form>
</div>
