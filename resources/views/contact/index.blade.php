<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="
    https://cdn.jsdelivr.net/npm/samim-font@4.0.5/dist/font-face.min.css
    " rel="stylesheet">

    <style>
              body {
            font-family: 'Samim', sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <form action="https://api.web3forms.com/submit" method="POST" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-700">تواصل معنا</h2>
        <input type="hidden" name="access_key" value="f17d3654-79d0-4455-8d62-1ccd3d5e9900">
        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-medium">الاسم</label>
            <input type="text" id="name" name="name" required
                class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-600 font-medium">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required
                class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-600 font-medium">الرسالة</label>
            <textarea id="message" name="message" required rows="4"
                class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300"></textarea>
        </div>

        <input type="checkbox" name="botcheck" class="hidden">

        <button type="submit" class="w-full bg-purple-900 text-white py-2 rounded-md hover:bg-blue-600 transition">
            إرسال
        </button>
    </form>

</body>
</html>
