<x-app-layout>
    <div class="min-h-screen bg-white text-gray-900">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-admin-sidebar />


        <!-- Main Content -->
        <main class="flex-1 min-w-0 p-8 flex flex-col gap-6">

            <!-- Header -->
            <div>
                <h1 class="text-2xl font-medium">
                    Admin dashboard
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    Welcome back, {{ auth()->user()->name }}
                </p>
            </div>


            <!-- Statistics -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">

                <div class="bg-gray-50 rounded-lg p-4">
                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Customers
                    </p>

                    <p class="text-2xl font-medium">
                        184
                    </p>
                </div>


                <div class="bg-gray-50 rounded-lg p-4">
                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Vehicles
                    </p>

                    <p class="text-2xl font-medium">
                        231
                    </p>
                </div>


                <div class="bg-gray-50 rounded-lg p-4">
                    <p class="text-[13px] text-gray-500 mb-1.5">
                        Active staff
                    </p>

                    <p class="text-2xl font-medium">
                        6
                    </p>
                </div>


                <!-- Job Orders Period -->
                <div
                    class="bg-gray-50 rounded-lg p-4"
                    x-data="{
                        period: 'month',
                        counts: {
                            week: 12,
                            month: 42,
                            year: 386
                        }
                    }"
                >
                    <div class="flex items-start justify-between gap-2">

                        <div>
                            <p class="text-[13px] text-gray-500 mb-1.5">
                                Job orders
                            </p>

                            <p
                                class="text-2xl font-medium"
                                x-text="counts[period]"
                            >
                                42
                            </p>
                        </div>

                        <!-- Period Selector -->
                        <div class="relative" x-data="{ open: false }">

                            <button
                                type="button"
                                @click="open = !open"
                                @click.outside="open = false"
                                class="inline-flex items-center gap-1 text-xs text-gray-500 hover:text-gray-900 transition"
                            >
                                <span
                                    x-text="
                                        period === 'week'
                                            ? 'This week'
                                            : period === 'month'
                                                ? 'This month'
                                                : 'This year'
                                    "
                                >
                                    This month
                                </span>

                                <i
                                    class="ti ti-chevron-down text-sm transition-transform"
                                    :class="{ 'rotate-180': open }"
                                ></i>
                            </button>


                            <!-- Dropdown -->
                            <div
                                x-show="open"
                                x-transition
                                class="absolute right-0 z-20 mt-2 w-32 bg-white border border-gray-200 rounded-lg shadow-sm p-1"
                            >

                                <button
                                    type="button"
                                    @click="period = 'week'; open = false"
                                    class="w-full text-left px-3 py-2 text-xs rounded-md hover:bg-gray-50 transition"
                                    :class="period === 'week' ? 'bg-gray-50 text-gray-900' : 'text-gray-500'"
                                >
                                    This week
                                </button>

                                <button
                                    type="button"
                                    @click="period = 'month'; open = false"
                                    class="w-full text-left px-3 py-2 text-xs rounded-md hover:bg-gray-50 transition"
                                    :class="period === 'month' ? 'bg-gray-50 text-gray-900' : 'text-gray-500'"
                                >
                                    This month
                                </button>

                                <button
                                    type="button"
                                    @click="period = 'year'; open = false"
                                    class="w-full text-left px-3 py-2 text-xs rounded-md hover:bg-gray-50 transition"
                                    :class="period === 'year' ? 'bg-gray-50 text-gray-900' : 'text-gray-500'"
                                >
                                    This year
                                </button>

                            </div>

                        </div>

                    </div>
                </div>

            </div>


            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-2">

                <a href="{{ route('admin.users.addcustomer') }}"
                   class="flex-1 min-w-[140px] flex items-center justify-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm hover:bg-gray-50 transition">
                    <i class="ti ti-user-plus text-base"></i>
                    Add customer
                </a>

                <a href="{{ route('admin.users.addvehicles') }}"
                   class="flex-1 min-w-[140px] flex items-center justify-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm hover:bg-gray-50 transition">
                    <i class="ti ti-car text-base"></i>
                    Add vehicle
                </a>

                <a href="{{ route('admin.users.create') }}"
                   class="flex-1 min-w-[140px] flex items-center justify-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm hover:bg-gray-50 transition">
                    <i class="ti ti-user-check text-base"></i>
                    Add staff
                </a>

                <a href="{{ route('admin.users.addservices') }}"
                   class="flex-1 min-w-[140px] flex items-center justify-center gap-2 border border-gray-200 rounded-lg px-4 py-2 text-sm hover:bg-gray-50 transition">
                    <i class="ti ti-tool text-base"></i>
                    Add services
                </a>

            </div>


            <!-- Recent Job Orders -->
            <div class="bg-white border border-gray-200 rounded-xl p-5">

                <div class="flex items-center justify-between gap-4 mb-4">

                    <p class="font-medium">
                        Recent job orders
                    </p>

                    <div class="relative">

                        <i class="ti ti-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>

                        <input
                            type="text"
                            placeholder="Search job orders"
                            class="w-56 pl-8 pr-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-300"
                        >

                    </div>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full text-sm">

                        <thead>
                            <tr class="text-left text-gray-500 border-b border-gray-100">

                                <th class="font-normal py-2 pr-2">
                                    JO ID
                                </th>

                                <th class="font-normal py-2 pr-2">
                                    Customer
                                </th>

                                <th class="font-normal py-2 pr-2">
                                    Vehicle
                                </th>

                                <th class="font-normal py-2 pr-2">
                                    Date
                                </th>

                                <th class="font-normal py-2">
                                    Status
                                </th>

                            </tr>
                        </thead>


                        <tbody>

                            <tr class="border-b border-gray-100">
                                <td class="py-2.5 pr-2">
                                    JO-1042
                                </td>

                                <td class="py-2.5 pr-2">
                                    Juan Dela Cruz
                                </td>

                                <td class="py-2.5 pr-2">
                                    Toyota Vios
                                </td>

                                <td class="py-2.5 pr-2">
                                    Sep 12
                                </td>

                                <td class="py-2.5">
                                    <span class="bg-amber-50 text-amber-700 text-xs px-2.5 py-1 rounded-md">
                                        Pending
                                    </span>
                                </td>
                            </tr>


                            <tr class="border-b border-gray-100">
                                <td class="py-2.5 pr-2">
                                    JO-1041
                                </td>

                                <td class="py-2.5 pr-2">
                                    Ana Reyes
                                </td>

                                <td class="py-2.5 pr-2">
                                    Honda Civic
                                </td>

                                <td class="py-2.5 pr-2">
                                    Sep 11
                                </td>

                                <td class="py-2.5">
                                    <span class="bg-amber-50 text-amber-700 text-xs px-2.5 py-1 rounded-md">
                                        Pending
                                    </span>
                                </td>
                            </tr>


                            <tr class="border-b border-gray-100">
                                <td class="py-2.5 pr-2">
                                    JO-1040
                                </td>

                                <td class="py-2.5 pr-2">
                                    Mark Santos
                                </td>

                                <td class="py-2.5 pr-2">
                                    Ford Ranger
                                </td>

                                <td class="py-2.5 pr-2">
                                    Sep 10
                                </td>

                                <td class="py-2.5">
                                    <span class="bg-green-50 text-green-700 text-xs px-2.5 py-1 rounded-md">
                                        Approved
                                    </span>
                                </td>
                            </tr>


                            <tr>
                                <td class="py-2.5 pr-2">
                                    JO-1039
                                </td>

                                <td class="py-2.5 pr-2">
                                    Liza Cruz
                                </td>

                                <td class="py-2.5 pr-2">
                                    Suzuki Ertiga
                                </td>

                                <td class="py-2.5 pr-2">
                                    Sep 9
                                </td>

                                <td class="py-2.5">
                                    <span class="bg-red-50 text-red-700 text-xs px-2.5 py-1 rounded-md">
                                        Rejected
                                    </span>
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
