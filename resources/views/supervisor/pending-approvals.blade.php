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
                        5 pending
                    </div>

                </div>


                <!-- Search / Filter -->
                <div class="flex flex-wrap gap-3">

                    <div class="relative flex-1 min-w-[220px] max-w-md">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Search job orders..."
                            class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-blue-100
                                   focus:border-blue-300"
                        >

                    </div>

                    <select
                        class="px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600"
                    >
                        <option>All mechanics</option>
                        <option>John Cuyos</option>
                        <option>Sharwen Lopez</option>
                        <option>Adili</option>
                    </select>

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