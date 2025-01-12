<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'male_question' => 'أستطيع تقبل زوجتي إن لم تكن جميلة',
                'female_question' => 'أنا فتاة لست بتلك الدرجة من الجمال',
                'wrong_answers' => [
                    "01",
                ]
            ],
            [
                'male_question' => 'يهمني جدا أن تكون زوجتي مهتمة بجمالها.',
                'female_question' => 'سأكون مهتمة بشكلي وجمالي بعد الزواج.',
                'wrong_answers' => [
                    "10",
                ]
            ],
            [
                'male_question' => 'أنا أهتم بشكلي ونظافتي.',
                'female_question' => 'يهمني أن يكون زوجي مهتم بشكله ونظافته.',
                'wrong_answers' => [
                    "01",
                ]
            ],
            [
                'male_question' => 'من حقي أن ألزم زوجتي بلبس اللباس المحتشم عند الخروج.',
                'female_question' => 'من حق زوجي التدخل في ملابسي عند خروجي للتسوق أو العمل.',
                'wrong_answers' => [
                    "10",
                ]
            ],
            [
                'male_question' => 'أريد زوجتي أن تلبس نقاب عند خروجنا إلى مكان به رجال.',
                'female_question' => 'يستحيل لي أن ألبس نقاب بعد الزواج.',
                'wrong_answers' => [
                    "11",
                ]
            ],
            [
                'male_question' => 'أرفض أن تتجمل زوجتي بالمكياج والعطور عند الخروج للتسوق أو العمل.',
                'female_question' => 'يستحيل لي الخروج للتسوق دون التجمل بالمكياج والعطور.',
                'wrong_answers' => [
                    "11",
                ]
            ],
            [
                'male_question' => 'يهمني الاهتمام بشكلي وملابسي أمام زوجتي بعد الزواج.',
                'female_question' => 'يهمني اهتمام زوجي بشكله وملابسه داخل البيت.',
                'wrong_answers' => [
                    "01",
                ]
            ],
            [
                'male_question' => 'أعاني من روائح كريهة في فمي وجسمي.',
                'female_question' => 'يمكنني تحمل روائح فم وجسم زوجي.',
                'wrong_answers' => [
                    "10",
                ]
            ],
            [
                'male_question' => 'يمكنني أن أقبل إن كانت زوجتي تعاني من رائحة الفم الدائمة.',
                'female_question' => 'لا أستطيع تحمل رائحة الفم الكريهة في زوجي.',
                'wrong_answers' => [
                    "01",
                ]
            ],
        ];
        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
