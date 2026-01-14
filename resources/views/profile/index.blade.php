<x-master title="Profiles Page">
    <h3>Profiles</h3>
    <hr>
    <div class="row">
        @foreach ($profiles as $profile)
        <div class="col-sm-3">
            <x-profile-card :profile="$profile" />
        </div>

        @endforeach
    </div>
</x-master>
{{ $profiles->links() }}