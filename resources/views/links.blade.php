<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                    </div>
                </div>
                <div class="w-full border-t overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-sm text-gray-500 border-y ltr:text-left rtl:text-right bg-blue-200">
                                <th class="w-10 px-2 py-3 text-center">{{ __('المعرف') }}</th>
                                <th class="px-4 py-3 text-center"><span>{{ __('الطالب') }}</span></th>
                                <th class="px-2 py-3 text-center">{{ __('العنوان') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('الرابط') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('الوصف') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('تاريخ الاضافة') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('تاريخ التعديل') }}</th>
                                <th class="px-2 py-3 text-center">{{ __('حذف') }}</th>
                            </tr>
                        </thead>
                        @forelse ($contents as $content)
                        <tbody class="border-t bg-white divide-y">
                            <tr  class="text-sm text-gray-600 bg-gray-100 ">
                                <td class="text-gray-600 px-2 py-3 text-center text-xx ">
                                    {{ $content->id }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $content->user->name }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $content->title }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $content->link }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center ">
                                    {{ $content->description }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    {{ $content->created_at->diffForHumans() }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    {{ $content->updated_at->diffForHumans() }}
                                </td>
                                <td class="text-gray-600 px-2 py-3 text-center">
                                    <form action="{{ route('content.destroy', $content->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <x-danger-button type="submit"
                                            onclick="return confirm('Are you shur to delete')"
                                            class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                            {{ __('حذف') }}
                                        </x-danger-button>
                                    </form>
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
