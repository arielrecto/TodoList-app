<x-layouts.app>

eto ang create view na html files

@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<form action="{{route('store')}}" method="post">

    @csrf
    <label for="">Title</label>
    <input type="text" name="title">
    <label for="">description</label>
    <input type="text" name="description">
    <button>Submit</button>

   </form>

<a href="{{route('index')}}">go to index</a>

</x-layouts.app>