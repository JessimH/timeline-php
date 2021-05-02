<div class="flex items-center my-5 px-4 bg-white">
    <div class="max-w-lg w-full rounded-lg shadow-lg p-4">
        <div class="inline-block rounded-full bg-green-300 text-white pr-5 h-11 line-height-username1 hover:bg-pink-400 cursor-pointer"> 
            @if($post->user->fileName )
                <img
                    class="rounded-full float-left h-full"
                    alt="User avatar"
                    src="{{url('/images/'.$post->user->fileName)}}"
                />
            @else
                <img 
                    class="rounded-full float-left h-full"
                    alt="User avatar"
                    src="http://fanfare-makabes.fr/wp-content/uploads/2015/09/user-image.jpg" alt="">
            @endif
            <span class="ml-3">{{ $post->user->name }}</span>
        </div>
        <p class="text-gray-500 my-1">
             {{\Carbon\Carbon::parse($post->created_at)->diffForHumans(null, true).' ago'}}
        </p>
        <h3 class="font-semibold text-lg text-gray-700 tracking-wide">{{ $post->body }}</h3>

    </div>
    <div class="m-4">
        <a href="" style="display: flex; color: red;">
            <p style="margin-right: 4px; font-weight: bold; color: black">{{ $post->likes }}</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <p>(ne fonctionne pas)</p>
        </a>
    </div>
</div>
