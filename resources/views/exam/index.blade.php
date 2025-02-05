<head>
    <title>موقع زواج المودة</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            مقياس التوافق الزواجي
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="questions_container" class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-gray-900 ">
                            {{ $question->question }}
                        </p>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <button type="button" data-id="{{ $question->id }}" data-answer="1" class="action__btn mx-2 inline-flex items-center px-4 py-2 bg-green-800  border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150">
                            نعم
                        </button>
                        <button type="button" data-id="{{ $question->id }}" data-answer="0" class="action__btn mx-2 inline-flex items-center px-4 py-2 bg-red-800  border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150">
                         لا
                        </button>
                    </div>
                    <div>
                        <div class="flex items-center justify-center">
                            <label for="is_important" class="ml-2 block text-sm text-gray-900 ">
                                سؤال حاسم
                            </label>
                            <input id="is_important" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        </div>
                    </div>
                </div>
                <div class="p-6 text-gray-900  flex items-center justify-center">
                    <p class="text-md/relaxed">
                        سؤال {{ session('currentQuestion') ?? 1 }} من أصل {{ $questionsCount }} أسئلة
                    </p>
                </div>
            </div>
        </div>
    </div>


    <slot name="scripts">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            function getImportant(){
               return $('#is_important').is(':checked');
            }
            $(document).on('click', '.action__btn', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let answer = $(this).data('answer');
                $.ajax({
                    url: "{{ route('exam.save-answer') }}",
                    type: "POST",
                    beforeSend: function(){
                        $('.action__btn').attr('disabled',true)
                    },
                    data: {
                        question_id: id,
                        answer: answer,
                        exam_id: "{{ $exam->id }}",
                        _token: "{{ csrf_token() }}",
                        is_important: getImportant(),
                    },
                    success: function(response) {
                        $('#questions_container').html(response.html);
                        if(response.lastQuestion){
                            window.location.href = "{{ url('/my-exams') }}" + '/' + response.examId;
                        }
                    }
                });
            });
        </script>
    </slot>
</x-app-layout>
