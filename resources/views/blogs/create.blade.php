<x-layout>
    <x-slot name="title">
        Create Blogs
    </x-slot>

    <x-card-wrapper class="col-md-9 p-3 mx-auto">
        <form action="/blog/store" method="POST">@csrf

            <x-form.input name="title" />

            <x-form.input name="slug" />

            <x-form.input name="intro" />

            <x-form.textarea name="body" />

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                    <option {{$category->id == old('category_id') ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </div>

            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Upload Blog</button>
            </div>
        </form>
    </x-card-wrapper>

</x-layout>
