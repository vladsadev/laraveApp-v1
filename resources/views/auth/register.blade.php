<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <div class="divide-y divide-gray-900/10">
        <form method="POST" action="/register"
              class="bg-white shadow-xs ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
            @csrf
            <div class="px-4 py-6 sm:p-6">
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{--First name--}}
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name"/>
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>

                    {{--Last Name--}}
                    <x-form-field>
                        <x-form-label for="last_name">Last Name:</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name"/>
                            <x-form-error name="last_name"/>
                        </div>
                    </x-form-field>

                    {{--Email--}}
                    <x-form-field>
                        <x-form-label for="email">Email:</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email"/>
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    {{--Password--}}
                    <x-form-field>
                        <x-form-label for="password">Password:</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password"/>
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>

                    {{--Password Confirmation--}}
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password:</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation"
                                          type="password_confirmation"/>
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>

                <x-form-button>Register</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
