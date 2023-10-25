<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <form action="{{ Route('user.index') }}" method="GET">
                            <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                                <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                    <x-label for="search" value="{{ __('بحث') }}" />
                                    <x-input id="search" name="search" type="text" value="{{ request('search') }}"
                                    class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                                </div>
                            </div>
                        </form>
                        <div class="ml-4">
                            <a href="{{ route('content.index') }}">
                                <x-secondary-button class="px-2">
                                    {{ __('عرض الروابط') }}
                                </x-secondary-button>
                            </a>
                        </div>
                        <div class="ml-4">
                            <a href="{{ route('user.create') }}">
                                <x-secondary-button class="px-2">
                                    {{ __('إضافة مستخدم') }}
                                </x-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full border-t overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-sm text-gray-500 border-y ltr:text-left rtl:text-right bg-blue-200">
                                <th class="w-10 px-2 py-3 text-center">{{ __('المعرف') }}</th>
                                <th class="px-4 py-3 text-center"><span>{{ __('الاسم') }}</span></th>
                                <th class="px-2 py-3 text-center">{{ __('الكود') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('الأيميل') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('الموقع') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('تاريخ الاضافة') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('تاريخ التعديل') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('عرض') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('حذف') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('إضافة رابط') }}</th>
                            </tr>
                        </thead>
                        @forelse ($users as $user)
                        <tbody class="border-t bg-white divide-y">
                            <tr  class="text-sm text-gray-600 bg-gray-100 ">
                                <td class="text-gray-600 px-2 py-3 text-center text-xx ">
                                    {{ $user->id }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $user->name }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $user->code }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $user->email }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $user->location }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    {{ $user->created_at->diffForHumans() }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    {{ $user->updated_at->diffForHumans() }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    <a href="{{ route('user.show', $user->id) }}">
                                        <x-secondary-button class="px-2">
                                            {{ __('عرض') }}
                                        </x-secondary-button>
                                    </a>
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <x-danger-button type="submit"
                                            onclick="return confirm('Are you shur to delete')"
                                            class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                            {{ __('حذف') }}
                                        </x-danger-button>
                                    </form>
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    <a href="{{ route('userLink_create', $user->id) }}">
                                        <x-secondary-button class="px-2">
                                            {{ __('إضافة رابط') }}
                                        </x-secondary-button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @empty
                        <tr>
                            <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700">
                                {{ __('app.No Data') }}</td>
                        </tr>
                        @endforelse      
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
