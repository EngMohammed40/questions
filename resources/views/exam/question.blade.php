@if ($question)
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="flex items-center justify-center mb-4">
            <p class="text-gray-900 dark:text-gray-100">
                {{ $question->question }}
            </p>
        </div>
        <div class="flex items-center justify-center mb-4">
            <button type="button" data-id="{{ $question->id }}" data-answer="1"
                class="action__btn mx-2 inline-flex items-center px-4 py-2 bg-green-800 dark:bg-green-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                نعم
            </button>
            <button type="button" data-id="{{ $question->id }}" data-answer="0"
                class="action__btn mx-2 inline-flex items-center px-4 py-2 bg-red-800 dark:bg-red-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                لا
            </button>
        </div>
        <div>
            <div class="flex items-center justify-center">
                <label for="is_important" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                    حاسم
                </label>
                <input id="is_important" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            </div>
        </div>
    </div>
    <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-center">
        <p class="text-md/relaxed">
            سؤال {{ session('currentQuestion') ?? 1 }} من أصل {{ $questionsCount }} أسئلة
        </p>
    </div>
@else
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="mb-4">
            <p>الاختبار مكتمل. سيتم التحويل....</p>
        </div>
    </div>
@endif
