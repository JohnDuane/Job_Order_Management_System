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


                <a href="{{ route('mechanic.CJO') }}"
                   class="shrink-0 flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800 transition">

                    <i class="ti ti-plus text-base"></i>
                    Create job order

                </a>

            </div>


            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">

                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Tasks
                    </p>

                    <p class="text-2xl font-medium">
                        4
                    </p>

                </div>


                <div class="bg-gray-50 rounded-lg p-4">

                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Pending
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
                        Approved Job Order
                    </p>

                    <p class="text-2xl font-medium">
                        7
                    </p>

                </div>

            </div>


            <!-- Your Tasks -->
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
                <div class="px-5 py-4 border-b border-gray-200 flex items-center justify-between">
                    <div>
                        <h2 class="text-[15px] font-semibold text-gray-900">
                            Your Tasks
                        </h2>
                        <p class="text-[13px] text-gray-500 mt-0.5">
                            Tasks assigned to you
                        </p>
                    </div>

                    <a href="{{ route('supervisor.pending-approvals') }}"
                        class="text-[13px] font-medium text-gray-700 hover:text-gray-900 transition">
                        View all
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-gray-200 bg-gray-50/70">
                                <th class="px-5 py-3 text-[12px] font-semibold text-gray-500 uppercase tracking-wide">
                                    Task
                                </th>
                                <th class="px-5 py-3 text-[12px] font-semibold text-gray-500 uppercase tracking-wide">
                                    Job Order
                                </th>
                                <th class="px-5 py-3 text-[12px] font-semibold text-gray-500 uppercase tracking-wide">
                                    Due Date
                                </th>
                                <th class="px-5 py-3 text-[12px] font-semibold text-gray-500 uppercase tracking-wide">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-lg bg-gray-100 flex items-center justify-center">
                                            <i class="ti ti-tool text-[18px] text-gray-600"></i>
                                        </div>

                                        <div>
                                            <p class="text-[13px] font-medium text-gray-900">
                                                Brake inspection
                                            </p>
                                            <p class="text-[12px] text-gray-500">
                                                Toyota Vios
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-700">
                                    JO-2026-0012
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-600">
                                    Sep 19, 2026
                                </td>

                                <td class="px-5 py-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-yellow-50 text-yellow-700 text-[11px] font-medium">
                                        Pending
                                    </span>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-lg bg-gray-100 flex items-center justify-center">
                                            <i class="ti ti-settings text-[18px] text-gray-600"></i>
                                        </div>

                                        <div>
                                            <p class="text-[13px] font-medium text-gray-900">
                                                Engine tune-up
                                            </p>
                                            <p class="text-[12px] text-gray-500">
                                                Mitsubishi Mirage
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-700">
                                    JO-2026-0010
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-600">
                                    Sep 20, 2026
                                </td>

                                <td class="px-5 py-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-yellow-50 text-yellow-700 text-[11px] font-medium">
                                        Pending
                                    </span>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-lg bg-gray-100 flex items-center justify-center">
                                            <i class="ti ti-car text-[18px] text-gray-600"></i>
                                        </div>

                                        <div>
                                            <p class="text-[13px] font-medium text-gray-900">
                                                Oil change
                                            </p>
                                            <p class="text-[12px] text-gray-500">
                                                Toyota Innova
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-700">
                                    JO-2026-0008
                                </td>

                                <td class="px-5 py-4 text-[13px] text-gray-600">
                                    Sep 21, 2026
                                </td>

                                

                                <td class="px-5 py-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-green-50 text-green-700 text-[11px] font-medium">
                                        Approved
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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


                        <span class="shrink-0 bg-yellow-50 text-yellow-700 text-xs px-2.5 py-1 rounded-md">
                            Pending
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
                            Approved
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
