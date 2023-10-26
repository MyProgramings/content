<x-app-layout>
    <x-slot name="header">
        
        <div class="flex justify-center mt-4">
            <div class="p-2 from-gray-700/50 flex outline outline-1 outline-blue-800">
                <p class="text-3xl">{{ __('قسم:') }}</p>
                <p class="text-3xl">{{ __($profile->section) }}</p>
            </div>
        </div>
        <div class="grid grid-col-5 gap-4">
            <div class="col-start-2 col-span-1 flex justify-center w-auto items-center">
                <img src="{{ $profile->profile_photo_url }}" alt="{{ $profile->name }}" class="rounded-full images">
            </div>
            <div class="col-start-3 col-span-2 flex justify-start items-center w-auto m-0">
                <div class="grid grid-rows-2">
                    <div class="flex flex-row items-center">
                        <ul class="flex flex-row mt-5">
                            <li class="ml-10 p-2 outline outline-1 outline-blue-800">{{ __('كود الطالب') }}</li>
                            <li class="ml-10 p-2 outline outline-1 outline-blue-800">{{ __($profile->code) }}</li>
                        </ul>
                        {{-- <a href="{{ route('profile.show') }}" class="border border-solid border-gray-300 rounded-md py-0 px-5 ml-16 whitespace-nowrap">تعديل الحساب</a> --}}
                    </div>
                    
                    <div>
                        <h1 class="font-light text-3xl ml-14">{{ $profile->name }}</h1>

                        <ul class="flex flex-row my-5 items-center">
                            <i class="fa-solid fa-location-dot ml-2 text-2xl"></i>
                            <p class="text-3xl">{{ __( $profile->location ) }}</p>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </x-slot>

    <div class="max-w-4xl my-0 mx-auto">
        
        <hr class="mb-5">
        <div class="flex justify-center mb-6">
            <div class="w-40 p-2 outline outline-1 outline-blue-800 text-center bg-blue-800 border border-transparent text-white ">{{ __('نتائج الامتحان') }}</div>
        </div>
        <div class="grid grid-cols-3 gap-4 mx-0 mt-0 mb-6">
            {{-- @includeWhen(count($contents) == 0, 'alerts.empty', ['msg' => 'لاتوجد روابط']) --}}
            @foreach ($contents as $content)
            <div class="links text-center">
                <a href="{{ $content->link }}" class="w-full h-full">
                    <div class="flex justify-center mb-1">
                        <div class="w-40 p-2 outline outline-1 outline-blue-800 text-center"><i class="fa-solid fa-download"></i> {{ $content->title }}</div>
                    </div>
                    <div class="links-info">
                        {{ $content->description }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
