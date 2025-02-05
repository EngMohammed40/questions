<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex items-center justify-center mt-4">
        <a href="{{ route('auth.google') }}" class="inline-flex items-center px-4 py-2  bg-gray-800  border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:bg-gray-700  focus:bg-gray-700  active:bg-gray-900  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2  transition ease-in-out duration-150">
            <img src="{{ asset('assets/images/google.png') }}" class="w-6 h-6 mx-2 invert" alt="">
            تسجيل الدخول بواسطة جوجل

        </a>
    </div>
</x-guest-layout>
