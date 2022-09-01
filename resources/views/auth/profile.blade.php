<x-layout>
    <x-slot name="title">
        User Info
    </x-slot>

    <x-card-wrapper class="col-md-7 mx-auto">
        <div class="card-header">
            <h4>Profile</h4>
        </div>
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <div>Name : {{$user->name}}</div>
                <div>Username : {{$user->username}}</div>
                <div>Email : {{$user->email}}</div>
            </div>
            @if ($user->avatar)
            <div style="width: 150px; height: 150px;" class="bg-secondary">
                <!--- // -->
            </div>
            @endif
        </div>
        <div class="card-footer d-flex justify-content-end">
            <div>
                <form action="">
                    <button type="submit" class="btn btn-secondary">Edit</button>
                </form>
            </div>
        </div>
    </x-card-wrapper>
</x-layout>
