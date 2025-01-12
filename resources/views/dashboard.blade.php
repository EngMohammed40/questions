<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            لوحة التحكم
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 md:w-1/3">
                    @if (!auth()->user()->gender)
                        <form method="POST" action="{{ route('gender.update') }}" class="space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="gender" value="النوع" />
                                <select id="gender" name="gender" class="block mt-1 w-full">
                                    <option value="male">ذكر</option>
                                    <option value="female">أنثى</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                            </div>
                            <div class="flex items-center justify-start mt-4">
                                <x-primary-button>
                                   حفظ
                                </x-primary-button>
                            </div>
                        </form>
                    @else 
                        <a href="{{ route('exam.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            ابدأ اختبار الان
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
