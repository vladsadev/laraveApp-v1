<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div class="space-y-2 w-max">
        <?php $i = 1; ?>
        @foreach($jobs as  $job)
            <a href="jobs/{{$job['id']}}" class="rounded-sm text-blue-500 block py-3 px-2 border border-gray-200">
                <div class="font-semibold">
                    {{$i++}}.- Employer: {{$job->employer->name}}
                </div>
                <div class="text-black">
                    <strong>{{$job['name']}}</strong> - Salary: {{$job['Salary']}}
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>

    </div>

</x-layout>
