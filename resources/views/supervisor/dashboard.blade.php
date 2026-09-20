<x-app-layout>
    <div class="min-h-screen bg-white text-gray-900">

        
    <div class="flex min-h-screen">

        <x-supervisor-sidebar />


        <!-- Main -->
        <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

            <!-- Header -->
            <div>

                <h1 class="text-2xl font-medium">
                    Supervisor dashboard
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    Welcome back, {{ auth()->user()->name }}
                </p>

            </div>


            <!-- Stats -->
<div class="grid grid-cols-2 sm:grid-cols-3 gap-3">

    {{-- Pending Approval --}}
    <div
        x-data="{ period: 'total' }"
        class="bg-gray-50 rounded-lg p-4"
    >

        <div class="flex items-start justify-between gap-2">

            <p class="text-[13px] text-gray-500 mb-1.5">
                Pending approval
            </p>

            <select
                x-model="period"
                class="bg-transparent border-0 p-0 pr-5
                       text-[11px] text-gray-500
                       focus:ring-0 focus:outline-none
                       cursor-pointer"
            >
                <option value="total">Total</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>

        </div>

        <p
            class="text-2xl font-medium"
            x-text="
                period === 'total' ? '5' :
                period === 'week' ? '3' :
                period === 'month' ? '12' :
                '48'
            "
        ></p>

    </div>


    {{-- Approved --}}
    <div
        x-data="{ period: 'total' }"
        class="bg-gray-50 rounded-lg p-4"
    >

        <div class="flex items-start justify-between gap-2">

            <p class="text-[13px] text-gray-500 mb-1.5">
                Approved
            </p>

            <select
                x-model="period"
                class="bg-transparent border-0 p-0 pr-5
                       text-[11px] text-gray-500
                       focus:ring-0 focus:outline-none
                       cursor-pointer"
            >
                <option value="total">Total</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>

        </div>

        <p
            class="text-2xl font-medium"
            x-text="
                period === 'total' ? '3' :
                period === 'week' ? '8' :
                period === 'month' ? '24' :
                '97'
            "
        ></p>

    </div>


    {{-- Rejected --}}
    <div
        x-data="{ period: 'total' }"
        class="bg-gray-50 rounded-lg p-4"
    >

        <div class="flex items-start justify-between gap-2">

            <p class="text-[13px] text-gray-500 mb-1.5">
                Rejected
            </p>

            <select
                x-model="period"
                class="bg-transparent border-0 p-0 pr-5
                       text-[11px] text-gray-500
                       focus:ring-0 focus:outline-none
                       cursor-pointer"
            >
                <option value="total">Total</option>
                <option value="week">Week</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>

        </div>

        <p
            class="text-2xl font-medium"
            x-text="
                period === 'total' ? '1' :
                period === 'week' ? '2' :
                period === 'month' ? '7' :
                '31'
            "
        ></p>

    </div>

</div>


            <!-- Pending Approvals -->
            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <p class="font-medium mb-4">
                    Pending approvals
                </p>


                <div class="flex flex-col gap-2">

                    <!-- Job Order 1 -->
                    <div class="flex items-center justify-between gap-4 border border-gray-200 rounded-lg px-4 py-3">

                        <div class="min-w-0">

                            <p class="text-sm font-medium">
                                JO-1045 · Juan Dela Cruz
                            </p>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Toyota Vios · Brake repair · Submitted by John Cuyos
                            </p>

                        </div>


                        <div class="flex gap-1.5 shrink-0">

                            <button
                                type="button"
                                class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                            >
                                <i class="ti ti-eye"></i>
                                Review
                            </button>

                        </div>

                    </div>


                    <!-- Job Order 2 -->
                    <div class="flex items-center justify-between gap-4 border border-gray-200 rounded-lg px-4 py-3">

                        <div class="min-w-0">

                            <p class="text-sm font-medium">
                                JO-1044 · Ana Reyes
                            </p>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Honda Civic · Oil change · Submitted by Sharwen Lopez
                            </p>

                        </div>


                        <div class="flex gap-1.5 shrink-0">

                            <button
                                type="button"
                                class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                            >
                                <i class="ti ti-eye"></i>
                                Review
                            </button>

                        </div>

                    </div>


                    <!-- Job Order 3 -->
                    <div class="flex items-center justify-between gap-4 border border-gray-200 rounded-lg px-4 py-3">

                        <div class="min-w-0">

                            <p class="text-sm font-medium">
                                JO-1043 · Mark Santos
                            </p>

                            <p class="text-xs text-gray-500 mt-0.5">
                                Ford Ranger · Engine check · Submitted by John Cuyos
                            </p>

                        </div>


                        <div class="flex gap-1.5 shrink-0">

                            <button
                                type="button"
                                class="inline-flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50"
                            >
                                <i class="ti ti-eye"></i>
                                Review
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Approval History -->
            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <p class="font-medium mb-4">
                    Approval history
                </p>


                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead>

                            <tr class="text-left text-gray-500 border-b border-gray-100">

                                <th class="font-normal py-2 pr-2">
                                    JO ID
                                </th>

                                <th class="font-normal py-2 pr-2">
                                    Action
                                </th>

                                <th class="font-normal py-2 pr-2">
                                    Remarks
                                </th>

                                <th class="font-normal py-2">
                                    Date
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr class="border-b border-gray-100">

                                <td class="py-2.5 pr-2">
                                    JO-1039
                                </td>

                                <td class="py-2.5 pr-2">

                                    <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                        Rejected
                                    </span>

                                </td>

                                <td class="py-2.5 pr-2 text-gray-500">
                                    Missing problem details
                                </td>

                                <td class="py-2.5">
                                    Sep 9, 3:14 pm
                                </td>

                            </tr>


                            <tr>

                                <td class="py-2.5 pr-2">
                                    JO-1038
                                </td>

                                <td class="py-2.5 pr-2">

                                    <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                        Approved
                                    </span>

                                </td>

                                <td class="py-2.5 pr-2 text-gray-500">
                                    &mdash;
                                </td>

                                <td class="py-2.5">
                                    Sep 9, 11:02 am
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

    </div>

</div>


</x-app-layout>
