<div class="flex items-center justify-center">
    <div class="mx-10">
        <!-- 1 card -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class="mt-8">
                <div class="w-12 h-12">
                    <div class="group w-full h-full rounded-full overflow-hidden shadow-inner text-center bg-purple table cursor-pointer">
                    <span class="hidden group-hover:table-cell text-white font-bold align-middle">KR</span>
                    @if(Auth::user()->fileName)
                    <img src="{{url('/images/'.Auth::user()->fileName)}}" alt="lovely avatar" class="object-cover object-center w-full h-full visible group-hover:hidden" />
                    </div>
                </div>
                <p class="text-xl font-semibold my-2">{{ Auth::user()->name }}</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                     <p>{{ Auth::user()->email }}</p> 
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                     <p>membre depuis: {{\Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans(null, true).' ago'}}</p> 
                </div>
                <div class="border-t-2"></div>
                <a href="/dashboard/user"  class="underline">
                    <p>Modifier</p>
                </a>
            </div>
        </div>
	</div>