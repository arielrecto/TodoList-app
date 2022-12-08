<x-layouts.app>

    <div class="min-h-screen bg-blue-100 ">
        @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        @if (Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif

        <form action="{{ route('store') }}" method="post">
            <div class="flex justify-center">
                <div class="flex flex-col w-1/2 space-y-4 mt-20 rounded-lg bg-gray-100 p-5">
                    <div class="flex justify-center text-2xl font-bold uppercase">
                        <label for="">Title</label>
                    </div>
                    <input type="text" name="title">
                    <label for="">description</label>
                    <input type="text" name="description">
                    <button class="btn btn-success">Submit</button>

                </div>
            </div>

            @csrf


        </form>

        <a href="{{ route('index') }}">go to index</a>
    </div>



</x-layouts.app>
