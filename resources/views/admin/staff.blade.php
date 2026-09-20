<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h1 class="text-2xl font-medium">
                            Staff
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage staff accounts and roles
                        </p>
                    </div>

                    <a href="{{ route('admin.users.create') }}"
                       class="inline-flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800">

                        <i class="ti ti-user-plus"></i>
                        Add staff

                    </a>

                </div>


                <!-- Search + Filter -->
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">

                    {{-- Search --}}
                    <div class="relative max-w-sm flex-1 sm:max-w-sm">

                        <i
                            class="ti ti-search absolute left-3 top-1/2
                                -translate-y-1/2 text-gray-400"
                        ></i>

                        <input
                            type="text"
                            placeholder="Search staff..."
                            class="w-full rounded-lg border border-gray-200
                                py-2 pl-9 pr-3 text-sm
                                focus:border-gray-300
                                focus:outline-none
                                focus:ring-2 focus:ring-gray-100"
                        >

                    </div>


                    {{-- Filter --}}
                    <div
                        class="relative"
                        x-data="{ open: false }"
                    >

                        <button
                            type="button"
                            @click="open = !open"
                            @click.outside="open = false"
                            class="inline-flex w-full items-center justify-center
                                gap-2 rounded-lg border border-gray-200
                                bg-white px-3 py-2 text-sm text-gray-600
                                transition hover:bg-gray-50
                                sm:w-auto"
                        >

                            <i class="ti ti-filter text-base"></i>

                            Filter

                            <i
                                class="ti ti-chevron-down text-xs transition-transform"
                                :class="{ 'rotate-180': open }"
                            ></i>

                        </button>


                        {{-- Filter Dropdown --}}
                        <div
                            x-show="open"
                            x-transition
                            class="absolute right-0 z-20 mt-2 w-48
                                rounded-xl border border-gray-200
                                bg-white p-2 shadow-lg"
                        >

                            <p class="px-3 py-2 text-xs font-medium uppercase tracking-wide text-gray-400">
                                Sort / Filter
                            </p>


                            {{-- A-Z --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-ascending text-base text-gray-400"></i>

                                A–Z
                            </button>


                            {{-- Z-A --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-descending text-base text-gray-400"></i>

                                Z–A
                            </button>


                            <div class="my-1 border-t border-gray-100"></div>


                            {{-- By Name --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By name
                            </button>


                            {{-- By Role --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user-shield text-base text-gray-400"></i>

                                By role
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Staff -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Staff accounts
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            6 active staff members
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>
                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        Staff
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Email
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Role
                                    </th>


                                    <th class="font-normal px-5 py-3 text-right">
                                        Action
                                    </th>

                                </tr>
                            </thead>


                            <tbody>

                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Bernie S. Aranda
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #001
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        bernie@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-blue-50 text-blue-700 text-xs px-2.5 py-1 rounded-md">
                                            Supervisor
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Maria
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #002
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        maria@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-purple-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                            Admin
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Adili
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #003
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        adili@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-gray-100 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Mechanic
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </main>

        </div>

    </div>



{{-- Success Modal --}}
@if (session('success'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-transition
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 px-4"
    >
        <div
            @click.outside="show = false"
            class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl"
        >

            <div class="flex items-start gap-4">

                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-green-100">
                    <i class="ti ti-check text-xl text-green-600"></i>
                </div>

                <div class="flex-1">

                    <h2 class="text-lg font-semibold text-gray-900">
                        Account created
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        {{ session('success') }}
                    </p>

                </div>

            </div>

            <div class="mt-6 flex justify-end">

                <button
                    type="button"
                    @click="show = false"
                    class="rounded-lg bg-gray-900 px-4 py-2.5
                           text-sm font-medium text-white
                           transition hover:bg-gray-800"
                >
                    OK
                </button>

            </div>

        </div>
    </div>
@endif

</x-app-layout>