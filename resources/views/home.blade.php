<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>

    @foreach($jobs as $job)
       <li>Title:{{$job['name']}}, Salary: {{$job['salary']}}</li>

    @endforeach


</x-layout>
