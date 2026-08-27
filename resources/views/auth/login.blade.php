<x-layout.app>
    <x-container>
        <x-card title="login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-button form="login-form">Logar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>


    <div class="mx-auto max-w-screen-md flex itens-center justify-center py-20">
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">
                <h1 class="card-title">Login</h1>
                <form action="{{ route('login') }}" method="POST" id="login-form">
                    @csrf
                    <div>
                        <input class="input input-bordered" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-sm text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <input class="input input-bordered" type="password" name="password" placeholder="Password">
                        @error('password')
                        <span class="text-sm text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                </form>
                <div class="card-actions">
                    <button class="btn btn-primary" type="submit" form="login-form">Login</button>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>