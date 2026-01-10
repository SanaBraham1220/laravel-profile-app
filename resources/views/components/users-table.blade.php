@props([ 'users'])
<h3>Users List</h3>
<table class="table">
    <tr><th>Name</th><th>Last Name</th><th>Job Title</th></tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['lastname'] }}</td>
            <td>{{ $user['job-title'] }}</td>
        </tr>
    @endforeach
</table>