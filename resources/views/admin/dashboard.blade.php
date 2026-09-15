<x-app-layout>
    <div class="min-h-screen bg-red-50 p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-red-700">
                Admin Dashboard
            </h1>

            <p class="mt-2 text-gray-600">
                Welcome, {{ auth()->user()->name }}!
            </p>

            <div class="mt-6 rounded-lg bg-white p-6 shadow">
                <p class="text-gray-700">
                    You are logged in as:
                    <strong class="text-red-700">
                        {{ auth()->user()->role }}
                    </strong>
                </p>

                <a
                    href="{{ route('admin.users.create') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                >
                    Log in
                </a>
                
            </div>
        </div>
    </div>
</x-app-layout>