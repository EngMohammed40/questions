<head>
    <title>موقع زواج المودة</title>
</head>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            الأعضاء
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 bg-white  border-b border-gray-200 ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 ">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500  uppercase tracking-wider">
                                    م
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500  uppercase tracking-wider">
                                   الاسم
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500  uppercase tracking-wider">
                                    البريد الالكتروني
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-medium text-gray-500  uppercase tracking-wider">
                                    التحكم
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white  divide-y divide-gray-200 ">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900  text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900  text-center">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900  text-center">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center space-x-2">
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 ms-2">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $users->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
