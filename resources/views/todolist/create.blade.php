<x-layouts.app>



        <form action="{{ route('store') }}" method="post">
            <div class="flex justify-center">
                <div class="flex flex-col w-1/4 space-y-4 mt-20 rounded-lg bg-gray-100 p-5">
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
