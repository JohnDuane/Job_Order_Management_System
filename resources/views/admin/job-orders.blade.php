<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div>

                    <h1 class="text-2xl font-medium">
                        Job orders
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        View and manage all job orders
                    </p>

                </div>


                <!-- Search / Filters -->
                <div class="flex flex-wrap gap-3">

                    <div class="relative flex-1 min-w-[220px] max-w-md">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Search job orders..."
                            class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-gray-100"
                        >

                    </div>

                    <select class="px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600">
                        <option>All statuses</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>In progress</option>
                        <option>Completed</option>
                        <option>Rejected</option>
                    </select>

                    <select class="px-3 py-2 text-sm border border-gray-200 rounded-lg bg-white text-gray-600">
                        <option>All mechanics</option>
                        <option>Adili</option>
                        <option>Mechanic 2</option>
                    </select>

                </div>


                <!-- Table -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Job order records
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            42 job orders this month
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>

                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        JO ID
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Customer
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Vehicle
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Mechanic
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Date
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Status
                                    </th>

                                    <th class="font-normal px-5 py-3 text-right">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1042
                                    </td>

                                    <td class="px-5 py-3">
                                        Juan Dela Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Toyota Vios
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 12
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-blue-50 text-blue-700 text-xs px-2.5 py-1 rounded-md">
                                            In progress
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1041
                                    </td>

                                    <td class="px-5 py-3">
                                        Ana Reyes
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Honda Civic
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 11
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-amber-50 text-amber-700 text-xs px-2.5 py-1 rounded-md">
                                            Pending
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1040
                                    </td>

                                    <td class="px-5 py-3">
                                        Mark Santos
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Ford Ranger
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        —
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 10
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Completed
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1039
                                    </td>

                                    <td class="px-5 py-3">
                                        Liza Cruz
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Suzuki Ertiga
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Adili
                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        Sep 9
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                            Rejected
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

</x-app-layout>