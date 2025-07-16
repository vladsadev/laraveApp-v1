<x-layout>
    <x-slot:heading>Job listing</x-slot:heading>

    <div class="divide-y divide-gray-900/10">
        <div class="">
            <div class="px-4 sm:px-0 mb-4">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a job </h2>
                <p class="mt-1 text-sm/6 text-gray-600"> We need some info.</p>
            </div>

            <form method="POST" action="/jobs"
                  class="bg-white shadow-xs ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                @csrf
                <div class="px-4 py-6 sm:p-8">
                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        {{-- Title--}}
                        <x-form-field>
                            <x-form-label>Job Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="title" id="name" placeholder="Mechanical Eng"/>
                                <x-form-error name="title"/>
                            </div>
                        </x-form-field>

                        {{--Salary--}}
                        <x-form-field>
                            <x-form-label>Salary:</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="salary" id="salary" placeholder="4.200 USD"/>
                                <x-form-error name="salary"/>
                            </div>
                        </x-form-field>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>


                    <x-form-button>Save</x-form-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
