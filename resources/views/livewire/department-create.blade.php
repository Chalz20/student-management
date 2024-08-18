<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Department') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium font-semibold text-gray-900">
                            {{ __('Department Information') }}
                        </h2>

                        <p class="mt-1 text-m text-gray-600">
                            {{ __("Fill in the information for the new department") }}
                        </p>
                    </header>

                    <form wire:submit="addDepartment" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <label for="name" >Department Name</label>
                            <input id="name" name="name" type="text" class="mt-1 block w-full rounded-lg "  wire:model="name"  />
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="code" >Department Code</label>
                            <input id="code" name="code" type="text" class="mt-1 block w-full rounded-lg"  wire:model="code" placeholder="Fill in uppercase eg.(ETE)" />
                            @error('code')
                            <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                            @enderror
                        </div>


                        <div>
                            <x-primary-button type="submit">Save</x-primary-button>

                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
