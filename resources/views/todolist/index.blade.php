<x-layouts.app>
    @if (Session::has('message'))
        <p>{{ Session::get('message') }}</p>
    @endif
    <div x-data="{open : false}">
        <button @click="open = !open">open Navigation Bar</button>
        <div class="navbar bg-base-100" x-show="open" x-transition.duration.700ms>
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Homepage</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>About</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost normal-case text-xl">Todolist</a>
            </div>
            <div class="navbar-end">
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="badge badge-xs badge-primary indicator-item"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>title</th>
                    <th>Description</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listTodos as $todo)
                    <tr>
                        <th>{{ $todo->id }}</th>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $todo->id]) }}"><button
                                    class="btn btn-active btn-sucess">Edit</button></a>

                            <form action="{{ route('delete', ['id' => $todo->id]) }}" method="post">
                                @csrf
                                <button class="btn btn-accent">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-warning shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span>No Data</span>
                        </div>
                    </div>
                @endforelse

            </tbody>
        </table>
    </div>

    <a href="{{ route('create') }}">Go to Create</a>
    <section class="text-sky-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -mx-4 -my-8">
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">The 400 Blows</h1>
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://dummyimage.com/103x103"
                                    class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                    <span class="title-font font-medium text-gray-900">Alper Kamu</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://dummyimage.com/102x102"
                                    class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                    <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="py-8 px-4 lg:w-1/3">
                    <div class="h-full flex items-start">
                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY
                            </h2>
                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings
                                jianbing microdosing tousled waistcoat.</p>
                            <a class="inline-flex items-center">
                                <img alt="blog" src="https://dummyimage.com/101x101"
                                    class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pl-3">
                                    <span class="title-font font-medium text-gray-900">Henry Letham</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
