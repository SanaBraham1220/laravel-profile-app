<div class="card mb-3"> 
    <img class="card-img-top" src="https://picsum.photos/50/50" alt="ImageProfile">
    <div class="card-body">
        <h3 class="card-title">Profile Information</h3>
        <h6>Name: {{ $profile->name }}</h6>
        <p class="card-text">Bio: {{ Str::limit($profile->bio, 50) }}</p>
        <div class="card-footer text-muted">
            <a href="{{ route('profile.show', $profile) }}" class="btn btn-primary stretched-link">View Profile</a>
        </div>
    </div>
</div>