<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <div class="flex items-center gap-2">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{ $user->photo }}" alt="Profile Photo">
                        </div>
                    </div>
                    <x-file-input name="photo"/>
                </div>
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" value="{{ old('description', $user->description) }}" />
                <x-input name="handler" prefix="biolinks.com.br/" placeholder="Handler" value="{{ old('handler', $user->handler) }}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Back to Dashboard</x-a>
                <x-button type="submit" form="form">Update Profile</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>