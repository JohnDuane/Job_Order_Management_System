<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            <x-admin-sidebar />


            <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

                <!-- Header -->
                <div class="flex items-start justify-between gap-4">

                    <div>
                        <h1 class="text-2xl font-medium">
                            Staff
                        </h1>

                        <p class="text-sm text-gray-500 mt-1">
                            Manage staff accounts and roles
                        </p>
                    </div>

                    <a href="{{ route('admin.users.create') }}"
                       class="inline-flex items-center gap-2 bg-gray-900 text-white rounded-lg px-4 py-2 text-sm hover:bg-gray-800">

                        <i class="ti ti-user-plus"></i>
                        Add staff

                    </a>

                </div>


                <!-- Search -->
                <div class="bg-white border border-gray-200 rounded-xl p-4">

                    <div class="relative max-w-sm">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                        <input
                            type="text"
                            placeholder="Search staff..."
                            class="w-full pl-9 pr-3 py-2 text-sm border border-gray-200 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-gray-100"
                        >

                    </div>

                </div>


                <!-- Staff -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <div class="px-5 py-4 border-b border-gray-100">

                        <p class="font-medium">
                            Staff accounts
                        </p>

                        <p class="text-xs text-gray-500 mt-1">
                            6 active staff members
                        </p>

                    </div>


                    <div class="overflow-x-auto">

                        <table class="w-full text-sm">

                            <thead>
                                <tr class="text-left text-gray-500 border-b border-gray-100">

                                    <th class="font-normal px-5 py-3">
                                        Staff
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Email
                                    </th>

                                    <th class="font-normal px-5 py-3">
                                        Role
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

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Bernie S. Aranda
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #001
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        bernie@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-blue-50 text-blue-700 text-xs px-2.5 py-1 rounded-md">
                                            Supervisor
                                        </span>

                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Active
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="border-b border-gray-100 hover:bg-gray-50">

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Maria
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #002
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        maria@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-purple-50 text-purple-700 text-xs px-2.5 py-1 rounded-md">
                                            Admin
                                        </span>

                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Active
                                        </span>

                                    </td>

                                    <td class="px-5 py-3 text-right">
                                        <a href="#" class="text-gray-500 hover:text-gray-900">
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </td>

                                </tr>


                                <tr class="hover:bg-gray-50">

                                    <td class="px-5 py-3">

                                        <div class="flex items-center gap-3">

                                            <div class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center">
                                                <i class="ti ti-user text-gray-500"></i>
                                            </div>

                                            <div>
                                                <p class="font-medium">
                                                    Adili
                                                </p>

                                                <p class="text-xs text-gray-500">
                                                    Staff #003
                                                </p>
                                            </div>

                                        </div>

                                    </td>

                                    <td class="px-5 py-3 text-gray-600">
                                        adili@example.com
                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-gray-100 text-gray-700 text-xs px-2.5 py-1 rounded-md">
                                            Mechanic
                                        </span>

                                    </td>

                                    <td class="px-5 py-3">

                                        <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                            Active
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