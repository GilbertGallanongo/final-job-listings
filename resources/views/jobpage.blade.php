<x-layout>
    <h2>Job Details:</h2>
    <h1>{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>
    <p>Job Description: {{ $job['job_description'] }}</p>

    <p><a href="/job_list">Back to job list</a></p>
</x-layout>
