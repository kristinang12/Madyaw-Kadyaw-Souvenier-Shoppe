<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcement Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="{{ url('add-announcement')}}" method="post">
                    @csrf
                    
                    <div>
                        <x-input-label for="header" :value="__('Header')" />
                        <x-text-input id="header" class="block mt-1 w-full" type="text" name="header" :value="old('header')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="sub_header" :value="__('Sub Header')" />
                        <x-text-input id="sub_header" class="block mt-1 w-full" type="text" name="sub_header" :value="old('sub_header')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="photo" :value="__('Photo')" />
                        <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" required autofocus />
                    </div>
                    
                    <div>
                        <x-input-label for="user_id" :value="__('User Id')" />
                        <x-text-input id="user_id" class="block mt-1 w-full" type="id" name="user_id" :value="old('user_id')" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">
                            {{ __('submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>