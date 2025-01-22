<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            لوحة التحكم
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (!auth()->user()->age)
                        <form method="POST" action="{{ route('gender.update') }}" class="space-y-6">
                            @csrf
                            <input type="hidden" name="token" value="{{ request('token') }}">
                            <div class="w-100 grid grid-cols-4 gap-2">
                                @if (!auth()->user()->gender)
                                    <div>
                                        <x-input-label for="gender" value="النوع" />
                                        <select id="gender" required name="gender" class="block mt-1 w-full">
                                            <option value="male">ذكر</option>
                                            <option value="female">أنثى</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                                    </div>
                                @endif
                                <div>
                                    <x-input-label for="age" value="العمر" />
                                    <input id="age" required name="age" type="text" class="mt-1 block w-full" placeholder="25" />
                                    <x-input-error class="mt-2" :messages="$errors->get('age')" />
                                </div>
                                <div>
                                    <x-input-label for="weight" value="الوزن" />
                                    <input id="weight" required name="weight" type="text" class="mt-1 block w-full" placeholder="25" />
                                    <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                                </div>
                                <div>
                                    <x-input-label for="height" value="الطول" />
                                    <input id="height" required name="height" type="text" class="mt-1 block w-full" placeholder="25" />
                                    <x-input-error class="mt-2" :messages="$errors->get('height')" />
                                </div>
                                <div>
                                    <x-input-label for="skin_color" value="لون البشره" />
                                    <select id="skin_color" required name="skin_color" class="block mt-1 w-full">
                                        <option value="بيضاء">بيضاء</option>
                                        <option value="حنطية">حنطية</option>
                                        <option value="سمراء">سمراء</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('skin_color')" />
                                </div>
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
