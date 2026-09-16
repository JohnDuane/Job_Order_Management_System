<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h1 class="text-2xl font-medium">
                            Vehicles
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage registered customer vehicles
                        </p>
                    </div>

                    <a href="#"
                       class="inline-flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800">

                        <i class="ti ti-car"></i>
                        Add vehicle

                    </a>

                </div>


                <!-- Search / Filter -->
                <div class="flex flex-wrap gap-3">

                    <div class="relative flex-1 min-w-[220px] max-w-md">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Search plate number, model..."
                            class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-gray-100"
                        >

                    </div>

                    <select
                        class="px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600"
                    >
                        <option>All makes</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Ford</option>
                        <option>Suzuki</option>
                    </select>

                </div>


                <!-- Vehicle Table -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Vehicle records
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            231 registered vehicles
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>
                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        Vehicle
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Plate number
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Owner
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Year
                                    </th>

                                    <th class="font-normal px-5 py-3 text-right">
                                        Action
                                    </th>

                                </tr>
                            </thead>


                            <tbody>

                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Toyota Vios</p>
                                        <p class="text-xs text-gray-500">Sedan</p>
                                    </td>

                                    <td class="px-5 py-3">
                                        ABC 1234
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Juan Dela Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        2022
                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Honda Civic</p>
                                        <p class="text-xs text-gray-500">Sedan</p>
                                    </td>

                                    <td class="px-5 py-3">
                                        XYZ 5678
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Ana Reyes
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        2021
                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3">
                                        <p class="font-medium">Ford Ranger</p>
                                        <p class="text-xs text-gray-500">Pickup</p>
                                    </td>

                                    <td class="px-5 py-3">
                                        DEF 9012
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Mark Santos
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        2023
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