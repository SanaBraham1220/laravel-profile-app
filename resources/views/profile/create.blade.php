<x-master title="Create Profile">

    @if($errors->any())
 
    <x-alert type="danger">
        <h6>Errors</h6>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
    @endif

    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <div class="div mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        @error('name')
        <div class="text-muted">
            {{ $message }}
        </div>
        @enderror
        <div class="div mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            @error('email')
            <div class="text-muted">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio"></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Add Profile</button>
        </div>
    </form>
</x-master>