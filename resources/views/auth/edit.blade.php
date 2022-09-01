<x-layout>
    <x-slot name="title">
        Edit Profile
    </x-slot>


    <section>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <div class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Profile</div>

                                    <form class="mx-1 mx-md-4" action="/user/{{$user->username}}/update" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="name" value="{{old('name',$user->name)}}"
                                                    id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <x-error name="name" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="username"
                                                    value="{{old('username',$user->username)}}" id="username"
                                                    class="form-control" />
                                                <label class="form-label" for="username">Your Username</label>
                                                <x-error name="username" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" value="{{old('email',$user->email)}}"
                                                    id="form3Example3c" class="form-control bg-light" readonly />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <x-error name="email" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-image fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="file" name="avatar" class="form-control" />
                                                <label class="form-label" for="username">Cover Image <span
                                                        class="small text-muted">(option)</span></label>
                                                <x-error name="avatar" />
                                            </div>
                                        </div>

                                        @if (auth()->user()->avatar)
                                        <div class="imgContainer mb-2 d-flex justify-content-around align-items-center">
                                            <div>
                                                <img style="width: 100px; height: 100px; background-position: center;"
                                                    src="/storage/{{$user->avatar}}" alt="{{$user->username}}">
                                            </div>
                                            <div>
                                                <span>Current Cover Imgae</span>
                                            </div>
                                        </div>

                                        <div class="form-check mb-5">
                                            <input class="form-check-input me-2" name="checkBox" type="checkbox"
                                                value="true" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3c">
                                                <span class="text-danger">Remove Cover Image</span>
                                            </label>
                                        </div>
                                        @endif

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-outline-primary btn-lg">Edit</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="/gif/Status update.gif" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
