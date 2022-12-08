<x-layouts.app>

<div class="min-h-screen bg-red-50">
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<form action="{{route('store')}}" method="post">
    <div class="flex justify-center">
    <div class="flex flex-col w-1/2 space-y-4 bg-blue-100 p-5 mt-20 rounded-lg">
    <div class="flex justify-center text-2xl font-bold uppercase">
    <label for="">Title</label>
</div>
    <input type="text" name="title">
    <label for="">description</label>
    <input type="text" name="description">
    <button class="btn btn-success">Submit</button>

   </form>
</div>
</div>
<a href="{{route('index')}}">go to index</a>
</div>



</x-layouts.app>
