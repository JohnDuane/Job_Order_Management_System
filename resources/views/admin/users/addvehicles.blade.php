<x-app-layout>

    <div class="min-h-screen bg-white text-gray-900">

        <div class="flex min-h-screen">

            {{-- Admin Sidebar --}}
            <x-admin-sidebar />


            {{-- Main Content --}}
            <main class="flex-1 min-w-0 p-6 sm:p-8">

                {{-- Header --}}
                <div class="mb-6">

                    <div class="mb-3 flex items-center gap-2 text-sm text-gray-400">

                        <a
                            href="{{ route('admin.vehicles') }}"
                            class="hover:text-gray-700"
                        >
                            Vehicles
                        </a>

                        <i class="ti ti-chevron-right text-xs"></i>

                        <span class="text-gray-600">
                            Add vehicle
                        </span>

                    </div>

                    <h1 class="text-2xl font-medium">
                        Add vehicle
                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Register a vehicle and associate it with a customer.
                    </p>

                </div>


                {{-- Form --}}
                <form
                    method="POST"
                    action="#"
                    class="max-w-3xl"
                >

                    @csrf


                    {{-- Vehicle Information --}}
                    <div class="rounded-xl border border-gray-200 bg-white">

                        <div class="border-b border-gray-100 px-5 py-4">

                            <p class="font-medium">
                                Vehicle information
                            </p>

                            <p class="mt-1 text-xs text-gray-500">
                                Enter the vehicle's identification details.
                            </p>

                        </div>


                        <div class="p-5">

                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">


                                {{-- Customer --}}
                                <div class="sm:col-span-2">

                                    <label
                                        for="customer"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Customer
                                    </label>

                                    <select
                                        id="customer"
                                        name="customer"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               bg-white px-3 py-2.5 text-sm
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                        <option value="">
                                            Select customer
                                        </option>

                                        <option value="Juan Dela Cruz">
                                            Juan Dela Cruz
                                        </option>

                                        <option value="Ana Reyes">
                                            Ana Reyes
                                        </option>

                                        <option value="Mark Santos">
                                            Mark Santos
                                        </option>

                                        <option value="Liza Cruz">
                                            Liza Cruz
                                        </option>

                                    </select>

                                </div>


                                {{-- Make --}}
                                <div>

                                    <label
                                        for="make"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Make
                                    </label>

                                    <input
                                        id="make"
                                        type="text"
                                        name="make"
                                        value="{{ old('make') }}"
                                        placeholder="Toyota"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               px-3 py-2.5 text-sm
                                               placeholder:text-gray-400
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                </div>


                                {{-- Model --}}
                                <div>

                                    <label
                                        for="model"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Model
                                    </label>

                                    <input
                                        id="model"
                                        type="text"
                                        name="model"
                                        value="{{ old('model') }}"
                                        placeholder="Vios"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               px-3 py-2.5 text-sm
                                               placeholder:text-gray-400
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                </div>


                                {{-- Year --}}
                                <div>

                                    <label
                                        for="year"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Year
                                    </label>

                                    <input
                                        id="year"
                                        type="number"
                                        name="year"
                                        value="{{ old('year') }}"
                                        placeholder="2022"
                                        min="1900"
                                        max="{{ date('Y') + 1 }}"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               px-3 py-2.5 text-sm
                                               placeholder:text-gray-400
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                </div>


                                {{-- Plate Number --}}
                                <div>

                                    <label
                                        for="plate_number"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Plate number
                                    </label>

                                    <input
                                        id="plate_number"
                                        type="text"
                                        name="plate_number"
                                        value="{{ old('plate_number') }}"
                                        placeholder="ABC 1234"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               px-3 py-2.5 text-sm uppercase
                                               placeholder:text-gray-400
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                </div>


                                {{-- Vehicle Type --}}
                                <div>

                                    <label
                                        for="vehicle_type"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Vehicle type
                                    </label>

                                    <select
                                        id="vehicle_type"
                                        name="vehicle_type"
                                        class="mt-1.5 block w-full rounded-lg border border-gray-200
                                               bg-white px-3 py-2.5 text-sm
                                               focus:border-gray-400 focus:outline-none
                                               focus:ring-2 focus:ring-gray-100"
                                    >

                                        <option value="">
                                            Select type
                                        </option>

                                        <option value="Car">
                                            Car
                                        </option>

                                        <option value="SUV">
                                            SUV
                                        </option>

                                        <option value="Truck">
                                            Truck
                                        </option>

                                        <option value="Van">
                                            Van
                                        </option>

                                        <option value="Other">
                                            Other
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Actions --}}
                    <div class="mt-5 flex flex-col-reverse gap-2 sm:flex-row sm:justify-end">

                        <a
                            href="{{ route('admin.vehicles') }}"
                            class="inline-flex items-center justify-center rounded-lg
                                   border border-gray-200 px-4 py-2.5 text-sm
                                   text-gray-700 hover:bg-gray-50"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2
                                   rounded-lg bg-gray-900 px-4 py-2.5 text-sm
                                   font-medium text-white hover:bg-gray-800"
                        >
                            <i class="ti ti-car"></i>
                            Add vehicle
                        </button>

                    </div>

                </form>

            </main>

        </div>

    </div>

</x-app-layout>