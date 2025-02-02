<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع زواج المودة</title>
    <link href="
    https://cdn.jsdelivr.net/npm/samim-font@4.0.5/dist/font-face.min.css
    " rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
           body {
            font-family: 'Samim', sans-serif;
        }
     /* فئة مخصصة للخط السفلي مع مسافة */
     .custom-underline {
            position: relative;
            text-decoration: none; /* إزالة الخط السفلي الافتراضي */
        }

        .custom-underline:hover::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -4px; /* المسافة بين النص والخط السفلي */
            height: 2px; /* سمك الخط السفلي */
            background-color: #4a5568; /* لون الخط السفلي */
        }

    </style>
</head>
<body class=" ">
    <header class="bg-pink-100 text-white py-2 px-24">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- زر تواصل معنا على اليسار -->
            <img src="/assets/images/logo.png" class="lg:w-40 lg:h-44 w-20 h-12 lg:-mr-12" alt="logo">
            <!-- القائمة في المنتصف -->
            <nav class="hidden lg:flex">
                <ul class="flex text-base ">
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline  ml-5">الرئيسية</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">الكتب</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">مقياس التوافق الزواجي</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">الدورات</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">خدمات الأعراس</a></li>
                    <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">تقديم طلبات الزواج</a></li>

                </ul>
            </nav>

            <!-- اللوجو على اليمين -->
            <a href={{ route('contact') }} class="hidden lg:block bg-yellow-600 text-white text-base px-8 py-3 rounded-3xl ">تواصل معنا</a>

 <!-- Hamburger Icon for Mobile -->
<button id="menu-toggle" class="lg:hidden focus:outline-none">
    <svg class="w-6 h-6 text-green-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
    </svg>
</button>
        </div>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="lg:hidden hidden mt-8 px-8 mb-8">
            <ul class="flex flex-col text-lg ">
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">الرئيسية</a></li>
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">الكتب</a></li>
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">مقياس التوافق الزواجي</a></li>
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">الدورات</a></li>
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">خدمات الأعراس</a></li>
                <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">تقديم طلبات الزواج</a></li>
            </ul>
        </div>
    </header>
    <main class="container mx-auto ">
        {{-- The section test about action  --}}
        <div class="flex flex-col bg-pink-100 py-8  px-28 rounded-b-3xl  lg:flex-row justify-center items-center lg:items-start gap-8 lg:gap-48">
            <!-- النص والزر -->
            <div class="w-full lg:w-3/6 space-y-8 mt-12 text-center lg:text-right">
                <h1 class="text-4xl sm:text-4xl font-bold text-purple-900">مقياس التوافق الزواجي</h1>
                <p class="text-sm sm:text-base">
                    يساعدك هذا المقياس على معرفة مدى التوافق بينك وبين خطيبتك، مما يساعد في بناء علاقة متينة وفهم أعمق لشخصياتكما. يحتوي الاختبار على مجموعة من العبارات التي تتعلق بطبيعة العلاقة بينكما وتصورك لشريكتك المستقبلية.
                </p>
                <a href="{{ route('auth.google') }}">
                    <button class="bg-yellow-600 text-white mt-12 text-sm sm:text-base px-6 sm:px-8 py-2 sm:py-3 rounded-3xl">
                        اجراء اختبار
                    </button>
                </a>
            </div>

            <!-- الصورة -->
            <div class="w-full lg:w-2/6 flex justify-center lg:justify-start mt-8 lg:mt-0">
                <img src="/assets/images/2.png" class="w-48 sm:w-64 lg:w-96 h-48 sm:h-64 lg:h-96" alt="image">
            </div>
        </div>
        <div class=" px-28 py-12 space-y-8">
          <h1 class="text-3xl font-bold text-purple-900">معلومات إضافية عن المقياس</h1>
          <p class="text-sm sm:text-base ">
                يهدف هذا المقياس إلى تقييم درجة التوافق بين الشريكين قبل الزواج، من خلال استكشاف الجوانب النفسية، الاجتماعية، والسلوكية التي قد تؤثر على استقرار العلاقة الزوجية في المستقبل. يتضمن المقياس مجموعة من العبارات التي تتناول القضايا المتعلقة بالتواصل، حل المشكلات، القيم المشتركة، التوقعات الزوجية، والتعامل مع الضغوط الأسرية والاجتماعية.
            </p>
            <div class="flex justify-center items-start flex-col gap-2 text-lg text-purple-900">
                <span>
                    <span class="font-bold">مدة الاختبار :</span> 12 دقيقة
                </span>

                <span>
                    <span class="font-bold">عدد أسئلة الاختبار:</span> 120 أسئلة
                </span>
            </div>
        </div>
        <div class="flex items-center justify-center mb-8 ">
            <div class="bg-red-200 rounded-3xl p-8 text-lg w-1/2 mx-auto border-2 border-gray-400">
              <span class="text-red-600 font-bold text-xl ">تنويه:</span>
              <br>
              <p class="text-gray-600">
                هذا المقياس مصمم لتقديم لمحة أولية. النتائج المستخلصة من هذا المقياس تهدف إلى تقديم إرشادات عامة فقط ولا ينبغي اعتبارها تشخيصاً طبياً أو بديلاً عن استشارة الطبيب أو المتخصص النفسي.
              </p>
            </div>
          </div>
    </main>

    <footer class="bg-pink-100 py-8 px-4 sm:px-8 lg:px-24">
        <div class="container mx-auto">

            <!-- الصف الثاني: الخدمات ووسائل التواصل الاجتماعي -->
            <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start space-y-8 lg:space-y-0">
                <div class="flex flex-col items-start text-start mb-8 w-96">
                    <img src="/assets/images/logo.png" class="lg:w-40 lg:h-44  -mr-12 " alt="logo">
                    <p class="text-gray-900 mt-4 max-w-2xl">
                        هو منصة إلكترونية متخصصة في تقديم خدمات الزواج الشرعي وفقًا للتعاليم الإسلامية، ويهدف إلى تسهيل عملية البحث عن شريك الحياة المناسب بطريقة آمنة ومحترمة
                    </p>
                </div>
                <!-- قسم الخدمات -->
                <div class="text-center lg:text-right">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">الخدمات</h3>
                    <nav>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-900 hover:text-gray-700">الكتب</a></li>
                            <li><a href="#" class="text-gray-900 hover:text-gray-700">مقياس التوافق الزواجي</a></li>
                            <li><a href="#" class="text-gray-900 hover:text-gray-700">الدورات</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="text-center lg:text-right">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">أخرى</h3>
                    <nav>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-900 hover:text-gray-700">خدمات الأعراس</a></li>
                            <li><a href="#" class="text-gray-900 hover:text-gray-700">تقديم طلبات الزواج</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- وسائل التواصل الاجتماعي -->
                <div class="text-center lg:text-right">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">تواصل معنا</h3>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </footer>
    <div class="text-center  bg-purple-900 text-white py-4 ">
                جميع الحقوق محفوظة  © زواج المودة 2025
            </div>
    <script>
        // jQuery to toggle mobile menu
        $(document).ready(function() {
            $('#menu-toggle').click(function() {
                $('#mobile-menu').slideToggle(); // Toggle mobile menu visibility
            });

            // Optional: Close menu when clicking outside
            $(document).click(function(event) {
                if (!$(event.target).closest('#menu-toggle, #mobile-menu').length) {
                    $('#mobile-menu').slideUp();
                }
            });
        });
    </script>
</body>
</html>
