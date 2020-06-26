@component('components.app')

    <header class="mb-6 relative">
        <img src="/images/daffy4.jpg" alt=""
             class="mb-2"
             width="700px"
             height="223px"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Donec sed ante a lectus tincidunt facilisis. Aliquam iaculis turpis non ex semper sagittis. Proin pellentesque consectetur finibus. Proin vitae sem condimentum, ornare diam vitae, lobortis ante. Etiam at facilisis mauris. Aenean eget purus sit amet odio aliquam fringilla. Etiam auctor erat lectus.
        </p>

        <img src="{{$user->avatar}}"
             alt=""
             class="rounded-full mr-2 absolute"
             style="width: 150px; left: calc(50% - 75px); top:47%"
        >

    </header>

    @include('_timeline', ['tweets' => $user->tweets])
@endcomponent
