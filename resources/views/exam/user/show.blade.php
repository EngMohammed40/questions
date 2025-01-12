<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            اختبار رقم {{ $exam->id }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">
                                    الرابط
                                </td>
                                <td class="px-4 py-2 border">
                                    {{ route('exam.index', [
                                        'token' => $exam->token,
                                    ]) }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">
                                     النسبة
                                </td>
                                <td class="px-4 py-2 border">
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $score . "%" }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">الأسئلة المتوافقة</td>
                                <td class="px-4 py-2 border"> 
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $importantScore['score'] }} من أصل {{ $importantScore['total'] }} متوافقة
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>



</x-app-layout>
