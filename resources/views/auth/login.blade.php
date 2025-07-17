<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <div class="divide-y divide-gray-900/10">
        <form method="POST" action="/login">
            @csrf
            <div class="px-4 py-6 sm:p-6">
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{--Email--}}
                    <x-form-field>
                        <x-form-label for="email">Email:</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" :value="old('email')"/>
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

                </div>
            </div>
            <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>

                <x-form-button>Login</x-form-button>
            </div>
        </form>
    </div>
</x-layout>
