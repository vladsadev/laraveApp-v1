<x-layout>
    <x-slot:heading>Edit job</x-slot:heading>


    <div class="divide-y divide-gray-900/10">
        <div class="">

            <form method="POST" action="/jobs/{{$job->id}}"
                  class="bg-white shadow-xs ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                @csrf
                @method('PATCH')
                <div class="px-4 py-6 sm:p-8">
                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        {{-- Title--}}
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-gray-900">Job Title:</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text"
                                           name="title"
                                           id="name"
                                           class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                           value="{{$job->title}}"
                                           placeholder="Mechanic"/>
                                </div>
                            </div>
                        </div>

                        {{--Salary--}}
                        <div class="sm:col-span-4">
                            <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary:</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input type="text"
                                           name="salary"
                                           id="salary"
                                           class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                           value="{{$job->salary}}"
                                           placeholder="3.500 USD"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex items-center justify-between gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                    <div>
                        <button form="delete-form"  class="text-red-500 hover:text-red-700 font-bold
                        cursor-pointer">Delete</button>
                    </div>
                    <div>
                        <a href="/jobs" class="text-sm/6 font-semibold hover:font-bold text-gray-900">Cancel</a>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save
                        </button>
                    </div>
                </div>
            </form>


            <form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
                @method("DELETE")
                @csrf
            </form>


        </div>


    </div>

</x-layout>
