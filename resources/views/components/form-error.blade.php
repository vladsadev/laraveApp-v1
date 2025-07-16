@props(['name'])


@error($name)
<p class="text-sm mt-2 text-red-500 font-semibold">{{$message}}</p>
@enderror
