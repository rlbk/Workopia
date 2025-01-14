<x-layout>
    <x-slot name="title">All Jobs</x-slot>
    <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-3">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <li>No jobs availabble</li>
        @endforelse
    </div>
</x-layout>
