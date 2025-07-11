<x-layout>
     <x-slot:heading>Job Listing</x-slot:heading>
<ul class="bg-red-200 w-max">
    @foreach($jobs as $job)
        <a href="jobs/{{$job['id']}} ">
            <li class="" >Name:{{$job['name']}} - Salary:{{$job['salary']}}</li>
        </a>
    @endforeach
</ul>

</x-layout>
