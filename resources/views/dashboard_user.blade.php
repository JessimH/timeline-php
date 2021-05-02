<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- LIVEWIRE -->
                    <div class="py-10">
                    <form action="/dashboard/user/update/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="py-40 bg-gray-100  bg-opacity-50 h-screen">
                    {{ csrf_field() }}
                        <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                            <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                            <div class="max-w-sm mx-auto md:w-full md:mx-0">
                                <div class="inline-flex items-center space-x-4">
                                @if(Auth::user()->fileName)
                                    <img
                                        class="w-10 h-10 object-cover rounded-full"
                                        alt="User avatar"
                                        src="{{url('/images/'.Auth::user()->fileName)}}"
                                    />
                                @else
                                    <img 
                                        class="w-10 h-10 object-cover rounded-full"
                                        alt="User avatar"
                                        src="http://fanfare-makabes.fr/wp-content/uploads/2015/09/user-image.jpg" alt="">
                                @endif
                                
                                <h1 class="text-gray-600">{{ Auth::user()->name }}</h1>
                                </div>
                            </div>
                            </div>
                            <div class="bg-white space-y-6">
                            <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                                <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
                                <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                <div>
                                    <label class="text-sm text-gray-400">Full name</label>
                                    <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg
                                        fill="none"
                                        class="w-6 text-gray-400 mx-auto"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                        />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        name="name"
                                        class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                                        placeholder="{{ Auth::user()->name }}"
                                    />
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm text-gray-400">Profile Pic</label>
                                    <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg
                                        fill="none"
                                        class="w-6 text-gray-400 mx-auto"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                        />
                                        </svg>
                                    </div>
                                    <input 
                                    type="file" 
                                    id="profilPic" 
                                    name="fileName" accept="image/png, image/jpeg">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm text-gray-400">email</label>
                                    <div class="w-full inline-flex border">
                                    <div class="pt-2 w-1/12 bg-gray-100">
                                        <svg
                                        fill="none"
                                        class="w-6 text-gray-400 mx-auto"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                        />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        name="email"
                                        class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                                        placeholder="{{ Auth::user()->email }}"
                                    />
                                    </div>
                                </div>
                                </div>
                            </div>

                            <hr />
                            <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                                <h2 class="md:w-4/12 max-w-sm mx-auto">Change password</h2>

                                <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                                <div class="w-full inline-flex border-b">
                                    <div class="w-1/12 pt-2">
                                    <svg
                                        fill="none"
                                        class="w-6 text-gray-400 mx-auto"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                                        />
                                    </svg>
                                    </div>
                                    <input
                                    type="password"
                                    name="password"
                                    class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4"
                                    placeholder="New"
                                    />
                                </div>
                                </div>

                                <div class="md:w-3/12 text-center md:pl-6">
                                <input type="submit" 
                                value="Enregistrer"
                                class="text-white w-full mx-auto max-w-sm rounded-md cursor-pointer text-center bg-green-500 py-2 px-4 inline-flex items-center hover:bg-pink-500 focus:outline-none md:float-right">
                                </div>
                            </div>

                            <hr />
                            <div class="w-full p-4 text-right text-gray-500">
                                <a href="/dashboard/user/destroy/{{ Auth::user()->id }}" class="inline-flex items-center focus:outline-none mr-4">
                                <svg
                                    fill="none"
                                    class="w-4 mr-2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                    />
                                </svg>
                                Delete account
                                </a>
                            </div>
                            </div>
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
