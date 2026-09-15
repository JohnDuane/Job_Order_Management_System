<x-app-layout>
    <div class="min-h-screen bg-blue-50 p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-blue-700">
                Supervisor Dashboard
            </h1>

            <p class="mt-2 text-gray-600">
                Welcome, {{ auth()->user()->name }}!
            </p>

            <div class="mt-6 rounded-lg bg-white p-6 shadow">
                <p class="text-gray-700">
                    You are logged in as:
                    <strong class="text-blue-700">
                        {{ auth()->user()->role }}
                    </strong>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
