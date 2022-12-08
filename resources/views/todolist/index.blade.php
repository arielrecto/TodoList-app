<x-layouts.app>
    @if (Session::has('message'))
        <p>{{ Session::get('message') }}</p>
    @endif
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
        @forelse ( $listTodos as $todo)
        <tr>
            <th>{{$todo->id}}</th>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
            <td>
                <a href="{{route('edit', ['id' => $todo->id])}}"><button class="btn btn-active btn-secondary">Edit</button></a>

                <form action="{{route('delete',['id' => $todo->id])}}" method="post"> 
                  @csrf 
                  <button class="btn btn-primary">Delete</button></form>
            </td>
          </tr>
        @empty
        <div class="alert alert-warning shadow-lg">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
              <span>No Data</span>
            </div>
          </div>
        @endforelse
            
          </tbody>
        </table>
      </div>

    <a href="{{ route('create') }}">Go to Create</a>
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -mx-4 -my-8">
          <div class="py-8 px-4 lg:w-1/3">
            <div class="h-full flex items-start">
              <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">The 400 Blows</h1>
                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <a class="inline-flex items-center">
                  <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
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
                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <a class="inline-flex items-center">
                  <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
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
                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <a class="inline-flex items-center">
                  <img alt="blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
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
