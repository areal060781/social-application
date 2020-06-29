@component('components.app')
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>
        </div>

        <input
            type="text"
            name="name"
            id="name"
            class="border border-gray-400 p-2 w-full"
            value="{{$user->name}}"
        >

        @error('name')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

       <div class="mb-6">
           <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
               Avatar
           </label>

           <div class="flex">
               <input
                   type="file"
                   name="avatar"
                   id="avatar"
                   class="border border-gray-400 p-2 w-full"
               >

               <img src="{{$user->avatar}}" alt="" width="40px">

           </div>
           @error('avatar')
           <p class="text-red-500 text-xs mt-2">{{$message}}</p>
           @enderror

       </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
        </div>

        <input
            type="text"
            name="username"
            id="username"
            class="border border-gray-400 p-2 w-full"
            value="{{$user->username}}"
        >

        @error('username')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
        </div>

        <input
            type="email"
            name="email"
            id="email"
            class="border border-gray-400 p-2 w-full"
            value="{{$user->email}}"
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
        >

        @error('password')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>
        </div>

        <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            class="border border-gray-400 p-2 w-full"
            required
        >

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>

    </form>
@endcomponent
