@component('components.master')
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="username"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Usename') }}</label>
                    </div>

                    <input id="username" type="text"
                           class="border border-gray-400 p-2 w-full" name="username"
                           value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                    <p class="text-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror

                    <div class="mb-6">
                        <label for="name"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Name') }}</label>
                    </div>

                    <input id="name" type="text"
                           class="border border-gray-400 p-2 w-full" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <p class="itext-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror

                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Email
                        </label>
                    </div>

                    <input
                        type="text"
                        name="email"
                        id="email"
                        class="border border-gray-400 p-2 w-full"
                        required
                        autocomplete="email"
                        value="{{old('email')}}"
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                        </label>
                    </div>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="border border-gray-400 p-2 w-full"
                        required
                        autocomplete="new-password"
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                    <div class="mb-6">
                        <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Password
                        </label>
                    </div>

                    <input
                        type="password"
                        name="password_confirmation"
                        id="password-confirm"
                        class="border border-gray-400 p-2 w-full"
                        required
                        autocomplete="new-password"
                    >

                    <div>
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                        >
                            Register
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endcomponent
