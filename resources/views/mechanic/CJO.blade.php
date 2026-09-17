<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            {{-- Mechanic Sidebar --}}
            <x-mechanic-sidebar />


            {{-- Main Content --}}
            <main class="flex-1 min-w-0 p-8">

                {{-- Header --}}
                <div class="mb-6">

                    <h1 class="text-2xl font-medium">
                        Create job order
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Create a new job order for a customer vehicle
                    </p>

                </div>


                {{-- Form --}}
                <form
                    method="POST"
                    action="#"
                    class="max-w-4xl flex flex-col gap-5"
                >

                    @csrf


                    {{-- Customer and Vehicle --}}
                    <div class="bg-white border border-gray-200 rounded-xl p-5">

                        <div class="mb-5">

                            <p class="font-medium">
                                Customer and vehicle
                            </p>

                            <p class="text-xs text-gray-500 mt-1">
                                Select the customer and vehicle for this job order.
                            </p>

                        </div>


                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">


                            {{-- Customer --}}
                            <div>

                                <label
                                    for="customer"
                                    class="block text-sm font-medium text-gray-700 mb-1.5"
                                >
                                    Customer
                                </label>

                                <select
                                    id="customer"
                                    name="customer"
                                    class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg
                                           bg-white focus:outline-none focus:ring-2
                                           focus:ring-blue-100 focus:border-blue-300"
                                >

                                    <option value="">
                                        Select customer
                                    </option>

                                    <option>
                                        Juan Dela Cruz
                                    </option>

                                    <option>
                                        Ana Reyes
                                    </option>

                                    <option>
                                        Mark Santos
                                    </option>

                                    <option>
                                        Liza Cruz
                                    </option>

                                </select>

                            </div>


                            {{-- Vehicle --}}
                            <div>

                                <label
                                    for="vehicle"
                                    class="block text-sm font-medium text-gray-700 mb-1.5"
                                >
                                    Vehicle
                                </label>

                                <select
                                    id="vehicle"
                                    name="vehicle"
                                    class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg
                                           bg-white focus:outline-none focus:ring-2
                                           focus:ring-blue-100 focus:border-blue-300"
                                >

                                    <option value="">
                                        Select vehicle
                                    </option>

                                    <option>
                                        Toyota Vios
                                    </option>

                                    <option>
                                        Honda Civic
                                    </option>

                                    <option>
                                        Ford Ranger
                                    </option>

                                    <option>
                                        Suzuki Ertiga
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    {{-- Service Details --}}
                    <div class="bg-white border border-gray-200 rounded-xl p-5">

                        <div class="mb-5">

                            <p class="font-medium">
                                Service details
                            </p>

                            <p class="text-xs text-gray-500 mt-1">
                                Provide the service and problem details.
                            </p>

                        </div>


                        <div class="flex flex-col gap-4">


                            {{-- Service --}}
                            <div>

                                <label
                                    for="service"
                                    class="block text-sm font-medium text-gray-700 mb-1.5"
                                >
                                    Service
                                </label>

                                <select
                                    id="service"
                                    name="service"
                                    class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg
                                           bg-white focus:outline-none focus:ring-2
                                           focus:ring-blue-100 focus:border-blue-300"
                                >

                                    <option value="">
                                        Select service
                                    </option>

                                    <option>
                                        Brake repair
                                    </option>

                                    <option>
                                        Oil change
                                    </option>

                                    <option>
                                        Engine check
                                    </option>

                                    <option>
                                        Suspension check
                                    </option>

                                </select>

                            </div>


                            {{-- Problem --}}
                            <div>

                                <label
                                    for="problem"
                                    class="block text-sm font-medium text-gray-700 mb-1.5"
                                >
                                    Problem description
                                </label>

                                <textarea
                                    id="problem"
                                    name="problem"
                                    rows="4"
                                    placeholder="Describe the vehicle problem..."
                                    class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg
                                           resize-none focus:outline-none focus:ring-2
                                           focus:ring-blue-100 focus:border-blue-300"
                                ></textarea>

                            </div>


                            {{-- Initial Findings --}}
                            <div>

                                <label
                                    for="findings"
                                    class="block text-sm font-medium text-gray-700 mb-1.5"
                                >
                                    Initial findings
                                </label>

                                <textarea
                                    id="findings"
                                    name="findings"
                                    rows="4"
                                    placeholder="Enter your initial findings..."
                                    class="w-full px-3 py-2.5 text-sm border border-gray-200 rounded-lg
                                           resize-none focus:outline-none focus:ring-2
                                           focus:ring-blue-100 focus:border-blue-300"
                                ></textarea>

                            </div>

                        </div>

                    </div>


                    {{-- Submit --}}
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-2">

                        <a
                            href="{{ url()->previous() }}"
                            class="inline-flex items-center justify-center rounded-lg
                                   border border-gray-200 px-4 py-2.5 text-sm
                                   text-gray-700 hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2
                                   rounded-lg bg-gray-900 text-white px-4 py-2.5
                                   text-sm hover:bg-gray-800"
                        >
                            <i class="ti ti-send"></i>
                            Submit job order
                        </button>

                    </div>

                </form>

            </main>

        </div>

    </div>

</x-app-layout>