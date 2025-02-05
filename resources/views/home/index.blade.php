<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>موقع زواج المودة</title>
  <link href="https://cdn.jsdelivr.net/npm/samim-font@4.0.5/dist/font-face.min.css" rel="stylesheet">
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
      text-decoration: none;
    }
    .custom-underline:hover::after {
      content: '';
      position: absolute;
      left: 0;
      right: 0;
      bottom: -4px;
      height: 2px;
      background-color: #4a5568;
    }
  </style>
</head>
<body>
  <header class="bg-pink-100 text-white py-4 px-6 lg:px-24 ">
    <div class="container mx-auto flex justify-between items-center px-4 ">
      <!-- شعار الموقع -->
      <img src="/assets/images/logo.png" class="lg:w-12 lg:h-20 w-24 h-28 lg:mr-2 " alt="logo">
      <!-- القائمة في المنتصف -->
      <nav class="hidden lg:flex ">
        <ul class="flex text-base">
          <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">الرئيسية</a></li>
          <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">السيرة الذاتية</a></li>
          <li class="relative dropdown">
            <button class="dropdown-button text-gray-900 hover:text-gray-700 custom-underline ml-5">
                المقاييس <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu absolute hidden bg-yellow-600 shadow-md mt-2 text-sm w-52 rounded-md border border-gray-300 right-0">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">مقياس التوافق الزواجي</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">اختبار الجاهزية للحياة الزوجية</a></li>
            </ul>
          </li>
          <li class="relative dropdown">
            <button class="dropdown-button text-gray-900 hover:text-gray-700 custom-underline ml-5">
                الكتب <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu absolute hidden bg-yellow-600 shadow-md mt-2 text-sm w-40 rounded-md border border-gray-300 right-0">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">الكتب الإلكترونية</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">الكتب المطبوعة</a></li>
            </ul>
          </li>

        <li class="relative dropdown">
            <button class="dropdown-button text-gray-900 hover:text-gray-700 custom-underline ml-5">
              الدورات <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu absolute hidden bg-yellow-600 shadow-md mt-2 w-48 text-sm rounded-md border border-gray-300 right-0">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">دورة التأهيل للزواج</a></li>
            </ul>
          </li>

          <li class="relative dropdown">
            <button class="dropdown-button text-gray-900 hover:text-gray-700 custom-underline ml-5">
              خدمات الأعراس <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu absolute hidden bg-yellow-600 shadow-md mt-2 w-48 text-sm rounded-md border border-gray-300 right-0">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">محلات تأجير الخيام</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">محلات تأجير القاعات</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">محلات الاثاث</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">محلات تأجير </a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">مستلزمات الاعراس</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">محلات التصميم والتصوير</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">مطاعم تقديم الولائم</a></li>
            </ul>
          </li>
          <li class="relative dropdown">
            <button class="dropdown-button text-gray-900 hover:text-gray-700 custom-underline ml-5">
                طلب استشارة مجانية <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu absolute hidden bg-yellow-600 shadow-md mt-2 w-48 text-sm rounded-md border border-gray-300 right-0">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">استشارة طبيب</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">استشارة قانوني</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">استشارة أخصائي شؤون أسرية</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">استشارة أخصائي نفسي </a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-black">استشارة متخصص شرعي</a></li>
            </ul>
          </li>
          <li><a href="#" class="text-gray-900 hover:text-gray-700 custom-underline ml-5">تقديم طلبات الزواج</a></li>
        </ul>
      </nav>
      <!-- زر تواصل معنا -->
      <a href="{{ route('contact') }}" class="hidden lg:block bg-yellow-600 text-white text-base px-8 py-3 rounded-3xl">تواصل معنا</a>
      <!-- أيقونة القائمة المتنقلة -->
      <button id="menu-toggle" class="lg:hidden focus:outline-none">
        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
    <!-- القائمة المتنقلة (تظهر في الشاشات الصغيرة) -->
    <div id="mobile-menu" class="lg:hidden hidden mt-8 px-8 mb-8">
      <ul class="flex flex-col text-lg">
        <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">الرئيسية</a></li>
        <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">الكتب</a></li>
        <li class="relative dropdown">
          <button class="dropdown-button text-black hover:text-gray-900 custom-underline ml-4">
            القائمة <i class="fa-solid fa-chevron-down"></i>
          </button>
          <ul class="dropdown-menu absolute hidden bg-white shadow-md mt-2 w-40 rounded-md border border-gray-300 right-0">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">الخيار 1</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">الخيار 2</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">الخيار 3</a></li>
          </ul>
        </li>
        <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">مقياس التوافق الزواجي</a></li>
        <li class="relative dropdown">
          <button class="dropdown-button text-black hover:text-gray-900 custom-underline ml-4">
            خدمات الأعراس <i class="fa-solid fa-chevron-down"></i>
          </button>
          <ul class="dropdown-menu absolute hidden bg-white shadow-md mt-2 w-40 rounded-md border border-gray-300 right-0">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">الخيار 1</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">الخيار 2</a></li>
          </ul>
        </li>
        <li><a href="#" class="text-black hover:text-gray-900 custom-underline ml-4">تقديم طلبات الزواج</a></li>
      </ul>
    </div>
  </header>
  <main class="container mx-auto ">
    {{-- The section test about action  --}}
    <div class="flex flex-col bg-pink-100 py-8  px-6 lg:px-28 rounded-b-3xl  lg:flex-row justify-center items-center lg:items-start gap-8 lg:gap-48">
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
    <div class="px-6 lg:px-28 py-12 space-y-8">
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
    <div class="flex items-center justify-center mb-8 px-6 ">
        <div class="bg-red-200 rounded-3xl p-8 text-lg lg:w-1/2 mx-auto border-2 border-gray-400">
          <span class="text-red-600 font-bold text-xl ">تنويه:</span>
          <br>
          <p class="text-gray-600">
            هذا المقياس مصمم لتقديم لمحة أولية. النتائج المستخلصة من هذا المقياس تهدف إلى تقديم إرشادات عامة فقط ولا ينبغي اعتبارها تشخيصاً طبياً أو بديلاً عن استشارة الطبيب أو المتخصص النفسي.
          </p>
        </div>
      </div>
</main>



  <footer class="bg-pink-100 py-8 px-6 lg:px-24">
    <!-- محتوى الفوتر -->
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start space-y-8 lg:space-y-0">
        <div class="flex flex-col items-center lg:items-start text-start mb-8 w-96">
            <img src="/assets/images/logo.png" class="lg:w-12 lg:h-20 w-24 h-28 lg:mr-4 " alt="logo">
            <p class="text-gray-900 mt-4 max-w-2xl px-6">
            هو منصة إلكترونية متخصصة في تقديم خدمات الزواج الشرعي وفقًا للتعاليم الإسلامية، ويهدف إلى تسهيل عملية البحث عن شريك الحياة المناسب بطريقة آمنة ومحترمة.
          </p>
        </div>
        <!-- الخدمات -->
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
        <!-- تواصل معنا -->
        <div class="text-center lg:text-right">
          <h3 class="text-lg font-semibold text-gray-900 mb-4">تواصل معنا</h3>
          <div class="flex space-x-6">
            <a href="#" class="text-gray-900 hover:text-gray-700 ml-4">
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
  <div class="text-center bg-purple-900 text-white py-4">
    جميع الحقوق محفوظة © زواج المودة 2025
  </div>

  <script>
$(document).ready(function() {
  // تبديل القائمة المتنقلة عند النقر على زر القائمة
  $('#menu-toggle').click(function() {
    $('#mobile-menu').slideToggle();
  });

  // إخفاء القائمة المتنقلة عند النقر خارجها
  $(document).click(function(event) {
    if (!$(event.target).closest('#menu-toggle, #mobile-menu').length) {
      $('#mobile-menu').slideUp();
    }
  });

  // التعامل مع القوائم المنسدلة العامة (في القوائم الرئيسية والمتنقلة)
  $('.dropdown-button').on('click', function(e) {
    e.stopPropagation(); // لمنع انتشار الحدث

    // الحصول على القائمة المنسدلة التابعة لهذا الزر
    var $dropdownMenu = $(this).siblings('.dropdown-menu');

    // إخفاء القوائم الأخرى المفتوحة داخل نفس القائمة وتعيين أيقوناتها للسهم لأسفل
    $(this).closest('ul').find('.dropdown-menu').not($dropdownMenu).each(function() {
      $(this).hide();
      $(this).siblings('.dropdown-button').find('i')
             .removeClass('fa-chevron-up')
             .addClass('fa-chevron-down');
    });

    // تبديل القائمة التابعة للزر الذي تم النقر عليه
    $dropdownMenu.toggle();

    if ($dropdownMenu.is(':visible')) {
      $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
    } else {
      $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
    }
  });

  $(document).on('click', function() {
    $('.dropdown-menu').hide();
    $('.dropdown-button').find('i')
      .removeClass('fa-chevron-up')
      .addClass('fa-chevron-down');
  });
});

  </script>
</body>
</html>
