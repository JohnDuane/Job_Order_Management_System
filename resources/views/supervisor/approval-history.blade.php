<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-supervisor-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div>

                    <h1 class="text-2xl font-medium">
                        Approval history
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Review previous approval and rejection actions
                    </p>

                </div>


                <!-- Filters -->
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
                        <option>All actions</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>

                </div>


                <!-- History -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Approval records
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            History of supervisor decisions on job orders
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
                                        Action
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Remarks
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Date
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1039
                                    </td>

                                    <td class="px-5 py-3">
                                        Liza Cruz
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                            Rejected
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Missing problem details
                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Sep 9, 3:14 pm
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1038
                                    </td>

                                    <td class="px-5 py-3">
                                        Juan Dela Cruz
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Approved
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        &mdash;
                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Sep 9, 11:02 am
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1037
                                    </td>

                                    <td class="px-5 py-3">
                                        Ana Reyes
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Approved
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        &mdash;
                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Sep 8, 2:26 pm
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3 font-medium">
                                        JO-1036
                                    </td>

                                    <td class="px-5 py-3">
                                        Mark Santos
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                            Rejected
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Please provide service details
                                    </td>

                                    <td class="px-5 py-3 text-gray-500">
                                        Sep 8, 10:18 am
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