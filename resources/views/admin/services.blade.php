<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>

                        <h1 class="text-2xl font-medium">
                            Services
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage available repair and maintenance services
                        </p>

                    </div>


                    <a href="#"
                       class="inline-flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800">

                        <i class="ti ti-plus"></i>
                        Add service

                    </a>

                </div>


                <!-- Search -->
                <div class="relative max-w-md">

                    <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="text"
                        placeholder="Search services..."
                        class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-gray-100"
                    >

                </div>


                <!-- Services -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Service catalog
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            Available services for job orders
                        </p>

                    </div>


                    <div>

                        <!-- Service -->
                        <div class="flex items-center gap-4 px-5 py-4 border-b border-gray-100 hover:bg-gray-50">

                            <div class="h-10 w-10 shrink-0 rounded-lg bg-gray-50 flex items-center justify-center">
                                <i class="ti ti-disc text-lg text-gray-500"></i>
                            </div>

                            <div class="min-w-0 flex-1">

                                <p class="font-medium">
                                    Brake repair
                                </p>

                                <p class="text-xs text-gray-500 mt-0.5">
                                    Brake inspection and repair service
                                </p>

                            </div>

                            <div class="text-right">

                                <p class="font-medium">
                                    ₱2,500
                                </p>

                                <p class="text-xs text-green-600">
                                    Active
                                </p>

                            </div>

                            <button class="text-gray-400 hover:text-gray-900">
                                <i class="ti ti-dots-vertical"></i>
                            </button>

                        </div>


                        <!-- Service -->
                        <div class="flex items-center gap-4 px-5 py-4 border-b border-gray-100 hover:bg-gray-50">

                            <div class="h-10 w-10 shrink-0 rounded-lg bg-gray-50 flex items-center justify-center">
                                <i class="ti ti-settings text-lg text-gray-500"></i>
                            </div>

                            <div class="min-w-0 flex-1">

                                <p class="font-medium">
                                    Engine tune-up
                                </p>

                                <p class="text-xs text-gray-500 mt-0.5">
                                    General engine inspection and tune-up
                                </p>

                            </div>

                            <div class="text-right">

                                <p class="font-medium">
                                    ₱3,500
                                </p>

                                <p class="text-xs text-green-600">
                                    Active
                                </p>

                            </div>

                            <button class="text-gray-400 hover:text-gray-900">
                                <i class="ti ti-dots-vertical"></i>
                            </button>

                        </div>


                        <!-- Service -->
                        <div class="flex items-center gap-4 px-5 py-4 hover:bg-gray-50">

                            <div class="h-10 w-10 shrink-0 rounded-lg bg-gray-50 flex items-center justify-center">
                                <i class="ti ti-droplet text-lg text-gray-500"></i>
                            </div>

                            <div class="min-w-0 flex-1">

                                <p class="font-medium">
                                    Oil change
                                </p>

                                <p class="text-xs text-gray-500 mt-0.5">
                                    Engine oil replacement and inspection
                                </p>

                            </div>

                            <div class="text-right">

                                <p class="font-medium">
                                    ₱1,200
                                </p>

                                <p class="text-xs text-green-600">
                                    Active
                                </p>

                            </div>

                            <button class="text-gray-400 hover:text-gray-900">
                                <i class="ti ti-dots-vertical"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

</x-app-layout>