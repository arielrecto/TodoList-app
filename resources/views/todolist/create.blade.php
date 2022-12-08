<x-layouts.app>




    <form action="{{ route('store') }}" method="post">
        <div class="flex justify-center">
            <div class="flex flex-col lg:w-1/4 space-y-4 mt-20 rounded-lg bg-gray-100 p-5">

                @if ($errors->has('title'))
                    <div class="alert alert-error shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                @endif
                @if ($errors->has('description'))
                    <div class="alert alert-error shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                @endif

                <div class="flex justify-center p-2 text-2xl font-bold uppercase">
                    <label for="">Title</label>
                </div>
                <input type="text" name="title" placeholder="Type here"
                    class="input input-bordered input-accent w-full " <div class="alert alert-error shadow-lg">
                <div class="flex justify-center p-2 text-2xl font-semibold uppercase">
                    <label for="">description</label>

                </div>

                <input type="text"name="description" placeholder="Type here"
                    class="input input-bordered input-accent w-full" />

                <button class="btn btn-success">create</button>

            </div>
        </div>

        @csrf


    </form>

    <a href="{{ route('index') }}">go to index</a>
    </div>



</x-layouts.app>
