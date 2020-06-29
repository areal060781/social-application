@if (auth()->user()->isNot($user))
<form action="/profiles/{{$user->name}}/follow" method="post">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">
        {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</form>
@endif