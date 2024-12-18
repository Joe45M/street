<div>
    <div x-data="{open: false}">
        <button @click="open = !open" class="bg-blue-500 px-4 py-1 mb-5 rounded-md text-white flex items-center gap-2">
            <span x-show="!open">Add home</span>
            <span x-show="open">Cancel</span>
        </button>

        <div x-show="open" class="bg-white rounded-sm p-5">
            <h3 class="text-2xl mb-5">Add a new home</h3>

                <label for="name" class="mb-2 block">Property name</label>
                <x-text-input id="name" wire:model="name" class="block"></x-text-input>

                <div class="flex justify-end">
                    <button wire:click.prevent="create" class="px-4 py-1 border border-gray-300 rounded-md">Save</button>
                </div>
        </div>
    </div>


    <div>
        <h3 class="text-2xl">Your homes</h3>
        @if($homes->count())
            @foreach($homes as $home)
                <a wire:naviate href="{{ route('homes.detail', $home->id) }}" class="block bg-white rounded-sm p-5">
                    {{ $home->name }}
                </a>
            @endforeach
        @else
            <div class="p-5 flex items-center gap-3">

                <div class="p-3 bg-pink-500 text-white px-4 rounded-md">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

                You don't have any homes right now.
            </div>
        @endif
    </div>
</div>
