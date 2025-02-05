<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            اختباراتي
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900  ">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4 border-b text-right text-sm font-semibold text-gray-700">
                                        رقم الاختبار
                                    </th>
                                    <th class="py-3 px-4 border-b text-right text-sm font-semibold text-gray-700">
                                        التحكم</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $exam)
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 px-4 border-b text-sm text-gray-700">{{ $loop->iteration }}</td>
                                        <td class="py-3 px-4 border-b text-sm text-gray-700">
                                            <a href="{{ route('exam.user.show', $exam) }}" class="inline-flex items-center px-4 py-2 bg-gray-800  border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150">عرض</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
