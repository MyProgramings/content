<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            {{ __('إضافة رابط') }}
        </div>
    
        <div class="w-full sm:max-w-md px-6 py-4 mt-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('content.store') }}">
                @csrf
                <div>
                    @forelse($users as $user)
                    <x-label for="user_id" value="{{ __('الطالب') }}" />
                    <x-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" value="{{ $user->id }}" readonly="true" />
                    @empty
                    @endforelse
                </div>
                <div>
                    <x-label for="title" value="{{ __('العنوان') }}" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                </div>
    
                <div class="mt-4">
                    <x-label for="link" value="{{ __('الرابط') }}" />
                    <x-input id="link" class="block mt-1 w-full" type="text" name="link" :value="old('link')" required autocomplete="link" />
                </div>
    
                <div>
                    <x-label for="description" value="{{ __('الوصف') }}" />
                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                </div>
    
    
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('user.index') }}">
                        <x-secondary-button>
                            {{ __('Cancel') }}
                        </x-secondary-button>
                    </a>
                    <x-button class="mr-4">
                        {{ __('إضافة') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>



</x-guest-layout>
