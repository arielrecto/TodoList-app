<x-layouts.app>

@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<form action="{{route('update', ['id' => $data->id])}}" method="post">

    @csrf
    <label for="">Title</label>
    <input type="text" name="title" placeholder="{{$data->title}}">
    <label for="">description</label>
    <input type="text" name="description" placeholder="{{$data->description}}">
    <button>Submit</button>

   </form>

   <a href="{{route('index')}}">go to index</a>
</x-layouts.app>