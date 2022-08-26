<section class="comments">

    <x-card-wrapper class="col-md-7 mx-auto">
        <div class="card-header bg-primary text-light">Leave Your Comments Here</div>
        <div class="card-body">
            @auth
            <textarea name="comments" class="form-control mb-2" rows="5" placeholder="Write Here..."></textarea>
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-primary">Comments</button>
            </div>
            @else
            <div class="text-center my-2 text-muted">
                If you want to comments this Blogs.<a href="/user/login" class="text-decoration-none">Login</a> First.
            </div>
            @endauth
        </div>
        <div class="card-footer">

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Show All Comments
                </button>
            </div>
            <div class="collapse" id="collapseExample">
                <x-card-wrapper>
                    <div class="card-header">User Name</div>
                    <div class="card-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat eaque fugiat temporibus,
                            provident vel atque cumque eum nobis optio tempore?</p>
                    </div>
                    <div class="card-footer text-center">
                        <span class="text-muted">4 hr ago</span>
                    </div>
                </x-card-wrapper>

                <x-card-wrapper>
                    <div class="card-header">User Name</div>
                    <div class="card-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat eaque fugiat temporibus,
                            provident vel atque cumque eum nobis optio tempore?</p>
                    </div>
                    <div class="card-footer text-center">
                        <span class="text-muted">4 hr ago</span>
                    </div>
                </x-card-wrapper>

                <x-card-wrapper>
                    <div class="card-header">User Name</div>
                    <div class="card-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat eaque fugiat temporibus,
                            provident vel atque cumque eum nobis optio tempore?</p>
                    </div>
                    <div class="card-footer text-center">
                        <span class="text-muted">4 hr ago</span>
                    </div>
                </x-card-wrapper>
            </div>
        </div>
    </x-card-wrapper>

</section>
