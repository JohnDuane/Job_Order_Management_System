<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-supervisor-sidebar />


            <!-- Main -->
            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h1 class="text-2xl font-medium">
                            Pending approvals
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Review job orders submitted for approval
                        </p>
                    </div>

                    <div class="flex items-center gap-2 bg-amber-50 text-amber-700 rounded-lg px-3 py-2 text-sm">
                        <i class="ti ti-clock"></i>
                        3 pending
                    </div>

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
                            placeholder="Search Job Orders..."
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


                             {{-- Low-High --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-descending text-base text-gray-400"></i>

                                Recent
                            </button>

                             {{-- High-Low --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-sort-descending text-base text-gray-400"></i>

                                Oldest
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

                                By Customer
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By Vehicle
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By Mechanic
                            </button>

                            <button
                                type="button"
                                class="flex w-full items-center gap-3 rounded-lg
                                    px-3 py-2 text-sm text-gray-700
                                    transition hover:bg-gray-50"
                            >
                                <i class="ti ti-user text-base text-gray-400"></i>

                                By J.O. ID
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Pending List -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Job orders awaiting approval
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            Review the details before approving or rejecting.
                        </p>

                    </div>


                    <div class="p-4 flex flex-col gap-3">


                        <!-- JO 1045 -->
                        <div class="border border-gray-200 rounded-xl p-4">

                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                                <div class="min-w-0">

                                    <div class="flex items-center gap-2">

                                        <p class="font-medium text-sm">
                                            JO-1045
                                        </p>

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </div>

                                    <p class="text-sm mt-1">
                                        Juan Dela Cruz
                                    </p>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Toyota Vios · Brake repair
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Submitted by John Cuyos · Sep 12, 2026
                                    </p>

                                </div>


                                <div class="flex items-center gap-2 shrink-0">

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                                    >
                                        <i class="ti ti-eye"></i>
                                        Review
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-green-50 text-green-700 px-3 py-2 text-sm hover:bg-green-100"
                                    >
                                        <i class="ti ti-check"></i>
                                        Approve
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-red-50 text-red-700 px-3 py-2 text-sm hover:bg-red-100"
                                    >
                                        <i class="ti ti-x"></i>
                                        Reject
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- JO 1044 -->
                        <div class="border border-gray-200 rounded-xl p-4">

                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                                <div class="min-w-0">

                                    <div class="flex items-center gap-2">

                                        <p class="font-medium text-sm">
                                            JO-1044
                                        </p>

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </div>

                                    <p class="text-sm mt-1">
                                        Ana Reyes
                                    </p>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Honda Civic · Oil change
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Submitted by Sharwen Lopez · Sep 12, 2026
                                    </p>

                                </div>


                                <div class="flex items-center gap-2 shrink-0">

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                                    >
                                        <i class="ti ti-eye"></i>
                                        Review
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-green-50 text-green-700 px-3 py-2 text-sm hover:bg-green-100"
                                    >
                                        <i class="ti ti-check"></i>
                                        Approve
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-red-50 text-red-700 px-3 py-2 text-sm hover:bg-red-100"
                                    >
                                        <i class="ti ti-x"></i>
                                        Reject
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- JO 1043 -->
                        <div class="border border-gray-200 rounded-xl p-4">

                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                                <div class="min-w-0">

                                    <div class="flex items-center gap-2">

                                        <p class="font-medium text-sm">
                                            JO-1043
                                        </p>

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </div>

                                    <p class="text-sm mt-1">
                                        Mark Santos
                                    </p>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Ford Ranger · Engine check
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Submitted by John Cuyos · Sep 11, 2026
                                    </p>

                                </div>


                                <div class="flex items-center gap-2 shrink-0">

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                                    >
                                        <i class="ti ti-eye"></i>
                                        Review
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-green-50 text-green-700 px-3 py-2 text-sm hover:bg-green-100"
                                    >
                                        <i class="ti ti-check"></i>
                                        Approve
                                    </button>

                                    <button
                                        type="button"
                                        class="inline-flex items-center gap-2 rounded-lg bg-red-50 text-red-700 px-3 py-2 text-sm hover:bg-red-100"
                                    >
                                        <i class="ti ti-x"></i>
                                        Reject
                                    </button>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </main>

        </div>

    </div>

</x-app-layout>