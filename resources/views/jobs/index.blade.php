<x-layout>
<x-slot name="title">Available Jobs</x-slot>
 <h1>Available Jobs</h1>
    <ul>
       @forelse($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>No jobs availabble</li>
        @endforelse
    </ul>
</x-layout>