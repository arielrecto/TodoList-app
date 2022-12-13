<x-layouts.app>

    @if (Session::has('message'))
        <p>{{ Session::get('message') }}</p>
    @endif

    <form action="{{ route('store') }}" method="post">
        <div class="flex justify-center">
            <div class="flex flex-col lg:w-1/4 space-y-5 mt-20 rounded-lg bg-sky-100 p-5">
                <form action="{{ route('update', ['id' => $data->id]) }}" method="post">

                    @csrf
                    <div class="flex justify-left p-1 text-1xl font-bold uppercase">

                        <label for="">Title</label>
                    </div>
                    <input type="text" name="title" placeholder="{{ $data->title}}"
                        class="input input-bordered input-accent w-full ">


                    <div class="flex justify-left p-1 text-1xl font-bold uppercase">
                        <label for="">description</label>
                    </div>
                    <input type="text" name="description"
                        placeholder="{{ $data->description }}"class="input input-bordered input-accent w-full ">


                    <button class="btn btn-success text-1xl font-bold uppercase">Submit</button>

                </form>
            </div>

        </div>



        <a href="{{ route('index') }}">go to index</a>
</x-layouts.app>
