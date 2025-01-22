<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            الاسئلة
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                    <p class="mb-4">
                        <a href="{{ route('admin.questions.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            اضافة سؤال
                        </a>
                    </p>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    م
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    سؤال الخاطب
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    سؤال المخطوبة
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    التحكم
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($questions as $question)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300 text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300 text-center">
                                        {{ $question->male_question }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300 text-center">
                                        {{ $question->female_question }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300 text-center space-x-2">
                                        <a href="{{ route('admin.questions.edit', $question->id) }}"
                                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                            تعديل
                                        </a>
                                        <form action="{{ route('admin.questions.destroy', $question->id) }}" method="POST" class="inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 ms-2">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $questions->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
