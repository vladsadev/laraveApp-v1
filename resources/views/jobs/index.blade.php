<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div class="space-y-2">
        @foreach($jobs as  $job)
            <a href="jobs/{{$job['id']}}" class="rounded-sm text-blue-500 block py-3 px-2 border border-gray-200">
                <div class="font-semibold">
                    Employer: {{$job->employer->name}}
                </div>
                <div class="text-black">
                    <strong>{{$job['title']}}</strong> - Salary: {{$job['salary']}}
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>

    </div>

</x-layout>
