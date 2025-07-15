<x-layout>
   <x-slot:heading> Job Description </x-slot:heading>

    <h2 class="text-blue-800 font-bold">Position: {{$job['title']}}</h2>
    <p>Salary: {{$job['salary']}}</p>

    <div class="mt-4">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </div>
</x-layout>
