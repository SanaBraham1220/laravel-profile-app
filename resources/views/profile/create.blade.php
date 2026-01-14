<x-master title="Create Profile">
<form action="{{ route('profile.store') }}" method="POST">
    @csrf
    <div class="div mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
     </div>
     <div class="div mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea  class="form-control" id="bio" name="bio"></textarea>
     </div>
     <div class="d-grid">
        <button type="submit" class="btn btn-primary">Add Profile</button>
    </div>
</form>
</x-master>