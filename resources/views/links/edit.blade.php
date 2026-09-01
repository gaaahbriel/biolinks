<x-layout.app>
    <x-container>
        <x-card title="Link edit :: {{ $link->name }}">
            <x-form :route="route('links.edit', $link)" post id="edit-form">
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
            </x-form>
            <x-slot:actions>
                <x-a href="{{ route('dashboard') }}">Cancel</x-a>
                <x-button type="submit" form="edit-form">Salvar</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>