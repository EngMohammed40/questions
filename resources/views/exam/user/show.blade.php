<head>
    <title>موقع زواج المودة</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            اختبار رقم {{ $exam->id }}
        </h2>
    </x-slot>
    <div class="py-12">
        <h2 class="text-center font-bold text-xl text-green-950 py-4">
            التقرير النهائي حول مستوى التوافق بين الخاطب والمخطوبة
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100 ">


                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">
                                    انسخ الرابط وارسله للطرف الآخر
                                </td>
                                <td class="px-4 py-2 border">
                                    {{ route('exam.index', [
                                        'token' => $exam->token,
                                    ]) }}
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">
                                     نسبة التوافق
                                </td>
                                <td class="px-4 py-2 border text-green-950">
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $score . "%" }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">الأسئلة الحاسمة للخاطب</td>
                                <td class="px-4 py-2 border">
                                    @if ($score == 0)
                                        <span class="text-red-500 ">لم تحسب بعد</span>
                                    @else
                                        {{ $maleImportantScore['score'] }} من أصل {{ $maleImportantScore['total'] }} غير متوافقة
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">الأسئلة الحاسمة للمخطوبة</td>
                                <td class="px-4 py-2 border">
                                    @if ($score == 0)
                                        <span class="text-red-500">لم تحسب بعد</span>
                                    @else
                                        {{ $femaleImportantScore['score'] }} من أصل {{ $femaleImportantScore['total'] }} غير متوافقة
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">العمر</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->age }} / {{ $exam->female?->age }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">الوزن</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->weight }} / {{ $exam->female?->weight }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">الطول</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->height }} / {{ $exam->female?->height }} )
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-green-950">لون البشرة</td>
                                <td class="px-4 py-2 border">
                                    ( {{ $exam->male?->skin_color }} / {{ $exam->female?->skin_color }} )
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="text-lg py-3 flex justify-start items-center">
                        <svg id="Layer_1" class="w-4 h-4" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.89 111.55"><defs><style>.cls-1{fill:#b71616;}.cls-2{fill:#e21b1b;fill-rule:evenodd;}.cls-3{fill:#fff;}</style></defs><title>red-alert</title><path class="cls-1" d="M2.35,84.43,45.29,10.2l.17-.27h0a22.92,22.92,0,0,1,7-7.23A17,17,0,0,1,61.58,0a16.78,16.78,0,0,1,9.11,2.69,22.79,22.79,0,0,1,7,7.26c.13.21.25.42.36.64l42.24,73.34.23.44h0a22.22,22.22,0,0,1,2.37,10.19,17.59,17.59,0,0,1-2.16,8.35,16,16,0,0,1-6.94,6.61l-.58.26a21.34,21.34,0,0,1-9.11,1.74v0H17.62c-.23,0-.44,0-.66,0a18.07,18.07,0,0,1-6.2-1.15A16.46,16.46,0,0,1,3,104.26a17.59,17.59,0,0,1-3-9.58,23,23,0,0,1,1.57-8.74,8.24,8.24,0,0,1,.77-1.51Z"/><path class="cls-2" d="M9,88.76l43.15-74.6c5.23-8.25,13.53-8.46,18.87,0l42.44,73.7c3.38,6.81,1.7,16-9.34,15.77H17.62c-7.27.18-12-6.19-8.64-14.87Z"/><path class="cls-3" d="M57.57,82.7a5.51,5.51,0,0,1,3.48-1.58,5.75,5.75,0,0,1,2.4.35,5.82,5.82,0,0,1,2,1.31,5.53,5.53,0,0,1,1.62,3.55,6.05,6.05,0,0,1-.08,1.4,5.54,5.54,0,0,1-5.64,4.6,5.67,5.67,0,0,1-2.27-.52,5.56,5.56,0,0,1-2.82-2.94,5.65,5.65,0,0,1-.35-1.27,5.83,5.83,0,0,1-.06-1.31h0a6.19,6.19,0,0,1,.57-2,4.57,4.57,0,0,1,1.13-1.56Zm8.16-10.24c-.2,4.79-8.31,4.8-8.5,0-.82-8.21-2.92-29.39-2.85-37.1.07-2.38,2-3.79,4.56-4.33a12.83,12.83,0,0,1,5,0c2.61.56,4.65,2,4.65,4.44v.24L65.73,72.46Z"/></svg> <span class="text-red-600 p-2 font-bold">تنبيه:</span>يرجى تصوير شاشة الاختبار وإرسالها للطرف الآخر </h3>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
