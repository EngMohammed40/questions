<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            إضافة سؤال جديد
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white  border-b border-gray-200 ">
                    <form action="{{ route('admin.questions.update', $question->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label for="male_question"
                                class="block mb-2 text-sm font-medium text-gray-900 ">السؤال
                                للخاطب</label>
                            <textarea
                                required
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="male_question" name="male_question" rows="3">{{ $question->male_question }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="female_question"
                                class="block mb-2 text-sm font-medium text-gray-900 ">السؤال
                                للمخطوبة</label>
                            <textarea
                                required
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="female_question" name="female_question" rows="3">{{ $question->female_question }}</textarea>
                        </div>
                        <div class="mb-6">
                            <div class="mb-6">
                                <label for="correct_answers"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">
                                    اختر الاجابات فقط التي يكون فيها توافق
                                </label>
                                <div id="correct_answers">
                                    @foreach ($answers as $key => $answer)
                                        <div class="flex items-center mb-2">
                                            <input type="checkbox" id="answer_{{ $loop->index }}"
                                                name="correct_answers[]" value="{{ $answer }}"
                                                @checked(!in_array($answer, $question->wrong_answers))
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                            <label for="answer_{{ $loop->index }}"
                                                class="ms-2 text-sm font-medium text-gray-900 ">
                                                {{ $key }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="flex justify-start">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150">
                                حفظ
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
