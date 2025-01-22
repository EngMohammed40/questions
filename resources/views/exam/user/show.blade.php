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
                                <td class="px-4 py-2 border">الأسئلة الحاسمة للخاطب</td>
                                <td class="px-4 py-2 border"> 
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $maleImportantScore['score'] }} من أصل {{ $maleImportantScore['total'] }} غير متوافقة
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">الأسئلة الحاسمة للخاطبة</td>
                                <td class="px-4 py-2 border"> 
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $femaleImportantScore['score'] }} من أصل {{ $femaleImportantScore['total'] }} غير متوافقة
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">العمر</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->age }} - {{ $exam->female?->age }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">الوزن</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->weight }} - {{ $exam->female?->weight }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">الطول</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->height }} - {{ $exam->female?->height }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">لون البشرة</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->skin_color }} - {{ $exam->female?->skin_color }} )
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>



</x-app-layout>
