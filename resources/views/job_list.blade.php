<x-layout>
      <h2>Job List:</h2>
    <h1>Available Jobs</h1>
    <ul>
        @foreach ($job_list as $job)
            <li><a href="/job_list/{{ $job['id'] }}">{{ $job['title'] }}<br><br></a></li>
        @endforeach 
    </ul>
</x-layout>
