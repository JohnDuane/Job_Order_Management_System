<x-app-layout>
    <div class="min-h-screen bg-white text-gray-900">


    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-56 shrink-0 bg-[#DDF6D2] border-r border-gray-200 p-4 flex flex-col gap-1">

            <!-- Logo -->
            <div class="flex items-center gap-2 px-2 pb-6 pt-1">
                <i class="ti ti-tool text-xl text-blue-600"></i>
                <span class="font-medium text-[15px]">JOMS</span>
            </div>


            <!-- Navigation -->
            <a href="#"
               class="flex items-center gap-2.5 px-3 py-2 rounded-lg bg-white shadow-sm font-medium text-sm text-gray-900">

                <i class="ti ti-layout-dashboard text-base"></i>
                Dashboard

            </a>


            <a href="#"
               class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm text-gray-500 hover:bg-white/70">

                <i class="ti ti-clipboard-list text-base"></i>
                My job orders

            </a>


            <a href="#"
               class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm text-gray-500 hover:bg-white/70">

                <i class="ti ti-file-plus text-base"></i>
                Create job order

            </a>


            <a href="#"
               class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm text-gray-500 hover:bg-white/70">

                <i class="ti ti-alert-triangle text-base"></i>
                Needs revision

            </a>


            <!-- Logout -->
            <div class="relative mt-auto" x-data="{ open: false }">

                <button
                    @click="open = !open"
                    class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-left hover:bg-gray-100"
                >
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-200">
                        <i class="ti ti-user text-xl text-gray-600"></i>
                    </div>

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-gray-800">
                            {{ auth()->user()->name }}
                        </p>

                        <p class="truncate text-xs text-gray-500">
                            {{ ucfirst(auth()->user()->role) }}
                        </p>
                    </div>

                    <i
                        class="ti ti-chevron-up text-gray-400 transition-transform"
                        :class="{ 'rotate-180': open }"
                    ></i>
                </button>

                <div
                    x-show="open"
                    @click.outside="open = false"
                    x-transition
                    class="absolute bottom-full left-0 mb-2 w-full rounded-xl border border-gray-200 bg-white p-2 shadow-lg"
                >

                    {{-- Breeze Profile --}}
                    <a
                        href="{{ route('profile.edit') }}"
                        class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-gray-700 hover:bg-gray-100"
                    >
                        <i class="ti ti-user-circle text-lg"></i>
                        Profile
                    </a>

                    {{-- Breeze Logout --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm text-red-600 hover:bg-red-50"
                        >
                            <i class="ti ti-logout text-lg"></i>
                            Logout
                        </button>
                    </form>

                </div>
            </div>

        </aside>


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
