@auth
    <form method="POST" action="/posts/{{$post->slug}}/comments" class="border border-gray-200 p-6 rounded">
        @csrf

        <header class="flex items-center">

            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full border border-gray-300 p-1">

            <h2 class="ml-4"><b>Want to participate?</b></h2>
        </header>

        <div class="mt-3">

                                <textarea name="body" rows="5" placeholder="Quick, think of something to say!"
                                          class="w-full text-sm focus:outline-none focus:ring border border-gray-200 rounded p-3"></textarea>

            @error('body')

            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end mt-3">

            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-sm py-2 px-10 rounded hover:bg-blue-600">
                Post
            </button>
        </div>
    </form>
@else
    <b>
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or
        <a href="/login" class="text-blue-500 hover:underline">Login</a> to leave a comment.
    </b>
@endauth
