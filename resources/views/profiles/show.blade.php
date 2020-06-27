@component('components.app')

    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/daffy4.jpg" alt=""
                 class="rounded-lg mb-2"
                 width="700px"
                 height="223px"
            >

            <img src="{{$user->avatar}}"
                 alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left: 50%"
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                <a
                    href="{{$user->path('edit')}}"
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                >Edit Profile
                </a>
                @endcan

                @component('components.follow-button', ['user'=>$user])@endcomponent
            </div>
        </div>

        <p class="text-sm">
            Donec sed ante a lectus tincidunt facilisis. Aliquam iaculis turpis non ex semper sagittis. Proin pellentesque consectetur finibus. Proin vitae sem condimentum, ornare diam vitae, lobortis ante. Etiam at facilisis mauris. Aenean eget purus sit amet odio aliquam fringilla. Etiam auctor erat lectus.
        </p>

    </header>

    @include('_timeline', ['tweets' => $user->tweets])
@endcomponent
