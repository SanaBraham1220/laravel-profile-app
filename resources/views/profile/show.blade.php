<x-master title="Profiles Page">
    <div>
        <h3>Profiles</h3>
        <table class="table" width="50%" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ Str::limit($profile->bio, 50) }}</td>
                </tr>
               
            </tbody>
        </table>
    
    </div>
</x-master>