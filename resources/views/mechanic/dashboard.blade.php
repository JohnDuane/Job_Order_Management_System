<x-app-layout>
    <div class="min-h-screen bg-white text-gray-900">


    <div class="flex min-h-screen">

        <x-mechanic-sidebar />


        <!-- Main -->
        <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

            <!-- Header -->
            <div class="flex items-start justify-between gap-4">

                <div>

                    <h1 class="text-2xl font-medium">
                        Mechanic dashboard
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Welcome back, {{ auth()->user()->name }}
                    </p>

                </div>


                <a href="#"
                   class="shrink-0 flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800 transition">

                    <i class="ti ti-plus text-base"></i>
                    Create job order

                </a>

            </div>


            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">

                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Assigned to me
                    </p>

                    <p class="text-2xl font-medium">
                        4
                    </p>

                </div>


                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        In progress
                    </p>

                    <p class="text-2xl font-medium">
                        2
                    </p>

                </div>


                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Needs revision
                    </p>

                    <p class="text-2xl font-medium">
                        1
                    </p>

                </div>


                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Completed this week
                    </p>

                    <p class="text-2xl font-medium">
                        7
                    </p>

                </div>

            </div>


            <!-- My Job Orders -->
            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <p class="font-medium mb-4">
                    My job orders
                </p>


                <div class="flex flex-col gap-2">

                    <!-- Job Order 1 -->
                    <div class="flex items-center justify-between gap-4 border border-gray-200 rounded-lg px-4 py-3">

                        <div class="min-w-0">

                            <p class="text-sm font-medium">
                                JO-1042 · Juan Dela Cruz
                            </p>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Toyota Vios · Brake repair
                            </p>

                        </div>


                        <span class="shrink-0 bg-blue-50 text-blue-700 text-xs px-2.5 py-1 rounded-md">
                            In progress
                        </span>

                    </div>


                    <!-- Job Order 2 -->
                    <div class="flex items-center justify-between gap-4 border border-gray-200 rounded-lg px-4 py-3">

                        <div class="min-w-0">

                            <p class="text-sm font-medium">
                                JO-1037 · Liza Cruz
                            </p>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Suzuki Ertiga · Suspension check
                            </p>

                        </div>


                        <span class="shrink-0 bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                            Completed
                        </span>

                    </div>

                </div>

            </div>


            <!-- Needs Revision -->
            <div class="bg-white border border-red-200 rounded-xl p-5">

                <p class="font-medium mb-4">
                    Needs revision
                </p>


                <div class="flex items-center justify-between gap-4 bg-red-50 rounded-lg px-4 py-3">

                    <div class="min-w-0">

                        <p class="text-sm font-medium text-red-700">
                            JO-1039 · Liza Cruz
                        </p>

                        <p class="text-xs text-red-700/80 mt-0.5">
                            Supervisor remark: missing problem details
                        </p>

                    </div>


                    <a href="#"
                       class="shrink-0 flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm hover:bg-gray-50 transition">

                        <i class="ti ti-refresh text-base"></i>
                        Revise

                    </a>

                </div>

            </div>

        </main>

    </div>

</div>


</x-app-layout>
