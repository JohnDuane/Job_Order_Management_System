<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-supervisor-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div>

                    <h1 class="text-2xl font-medium">
                        Assign mechanic
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Assign approved job orders to available mechanics
                    </p>

                </div>


                <!-- Search -->
                <div class="relative max-w-md">

                    <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="text"
                        placeholder="Search job orders..."
                        class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-blue-100
                               focus:border-blue-300"
                    >

                </div>


                <!-- Available Job Orders -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Job orders awaiting assignment
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            Select a mechanic for each approved job order.
                        </p>

                    </div>


                    <div class="p-4 flex flex-col gap-3">


                        <!-- JO -->
                        <div class="border border-gray-200 rounded-xl p-4">

                            <div class="flex flex-col lg:flex-row lg:items-center gap-4">

                                <div class="flex-1">

                                    <div class="flex items-center gap-2">

                                        <p class="font-medium text-sm">
                                            JO-1046
                                        </p>

                                        <span class="bg-green-50 text-green-700 text-xs px-2 py-1 rounded-md">
                                            Approved
                                        </span>

                                    </div>

                                    <p class="text-sm mt-1">
                                        Juan Dela Cruz
                                    </p>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Toyota Vios · Brake repair
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Approved Sep 12, 2026
                                    </p>

                                </div>


                                <div class="flex flex-col sm:flex-row gap-2">

                                    <select
                                        class="min-w-[190px] px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600"
                                    >
                                        <option>Select mechanic</option>
                                        <option>John Cuyos</option>
                                        <option>Sharwen Lopez</option>
                                        <option>Adili</option>
                                    </select>

                                    <button
                                        type="button"
                                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-gray-900 text-white px-4 py-2 text-sm hover:bg-gray-800"
                                    >
                                        <i class="ti ti-user-check"></i>
                                        Assign
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- JO -->
                        <div class="border border-gray-200 rounded-xl p-4">

                            <div class="flex flex-col lg:flex-row lg:items-center gap-4">

                                <div class="flex-1">

                                    <div class="flex items-center gap-2">

                                        <p class="font-medium text-sm">
                                            JO-1043
                                        </p>

                                        <span class="bg-green-50 text-green-700 text-xs px-2 py-1 rounded-md">
                                            Approved
                                        </span>

                                    </div>

                                    <p class="text-sm mt-1">
                                        Mark Santos
                                    </p>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        Ford Ranger · Engine check
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Approved Sep 11, 2026
                                    </p>

                                </div>


                                <div class="flex flex-col sm:flex-row gap-2">

                                    <select
                                        class="min-w-[190px] px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600"
                                    >
                                        <option>Select mechanic</option>
                                        <option>John Cuyos</option>
                                        <option>Sharwen Lopez</option>
                                        <option>Adili</option>
                                    </select>

                                    <button
                                        type="button"
                                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-gray-900 text-white px-4 py-2 text-sm hover:bg-gray-800"
                                    >
                                        <i class="ti ti-user-check"></i>
                                        Assign
                                    </button>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>


                <!-- Active Mechanics -->
                <div class="bg-white border border-gray-200 rounded-xl p-5">

                    <p class="font-medium">
                        Active mechanics
                    </p>

                    <p class="text-xs text-gray-500 mt-1 mb-4">
                        Current mechanic workload
                    </p>


                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">


                        <div class="border border-gray-200 rounded-lg p-4">

                            <div class="flex items-center justify-between">

                                <p class="font-medium text-sm">
                                    Adili
                                </p>

                                <span class="h-2 w-2 rounded-full bg-green-500"></span>

                            </div>

                            <p class="text-xs text-gray-500 mt-1">
                                2 active job orders
                            </p>

                        </div>


                        <div class="border border-gray-200 rounded-lg p-4">

                            <div class="flex items-center justify-between">

                                <p class="font-medium text-sm">
                                    John Cuyos
                                </p>

                                <span class="h-2 w-2 rounded-full bg-green-500"></span>

                            </div>

                            <p class="text-xs text-gray-500 mt-1">
                                1 active job order
                            </p>

                        </div>


                        <div class="border border-gray-200 rounded-lg p-4">

                            <div class="flex items-center justify-between">

                                <p class="font-medium text-sm">
                                    Sharwen Lopez
                                </p>

                                <span class="h-2 w-2 rounded-full bg-green-500"></span>

                            </div>

                            <p class="text-xs text-gray-500 mt-1">
                                1 active job order
                            </p>

                        </div>


                        <div class="border border-gray-200 rounded-lg p-4">

                            <div class="flex items-center justify-between">

                                <p class="font-medium text-sm">
                                    Mechanic 4
                                </p>

                                <span class="h-2 w-2 rounded-full bg-gray-500"></span>

                            </div>

                            <p class="text-xs text-gray-500 mt-1">
                                Available
                            </p>

                        </div>


                    </div>

                </div>

            </main>

        </div>

    </div>

</x-app-layout>