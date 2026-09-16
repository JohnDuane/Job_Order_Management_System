<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h1 class="text-2xl font-medium">
                            Customers
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage customer records
                        </p>
                    </div>

                    <a href="#"
                       class="inline-flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800 transition">

                        <i class="ti ti-user-plus"></i>
                        Add customer

                    </a>

                </div>


                <!-- Search -->
                <div class="bg-white border border-gray-200 rounded-xl p-4">

                    <div class="relative max-w-sm">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Search customers..."
                            class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-gray-100
                                   focus:border-gray-300"
                        >

                    </div>

                </div>


                <!-- Customer Table -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">
                        <p class="font-medium">
                            Customer records
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            184 customers
                        </p>
                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>
                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        Customer
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Contact
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Vehicles
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Date added
                                    </th>

                                    <th class="font-normal px-5 py-3 text-right">
                                        Action
                                    </th>

                                </tr>
                            </thead>


                            <tbody>

                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Juan Dela Cruz</p>
                                        <p class="text-xs text-gray-500">Customer #001</p>
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        0917 123 4567
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        2 vehicles
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 10, 2026
                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Ana Reyes</p>
                                        <p class="text-xs text-gray-500">Customer #002</p>
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        0918 456 7890
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        1 vehicle
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 9, 2026
                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Mark Santos</p>
                                        <p class="text-xs text-gray-500">Customer #003</p>
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        0920 222 3333
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        3 vehicles
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 8, 2026
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

</x-app-layout>