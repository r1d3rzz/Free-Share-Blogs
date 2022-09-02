<x-layout>
    <x-slot name="title">
        Edit Blog
    </x-slot>

    <x-card-wrapper class="col-md-9 p-3 mx-auto">
        <form action="/blog/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" value="{{$blog->title}}" />

            <x-form.input name="slug" value="{{$blog->slug}}" />

            <x-form.input name="intro" value="{{$blog->intro}}" />

            <x-form.textarea name="body" class="editor" value="{{$blog->body}}" />

            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                <small class="text-muted">(optional)</small>
            </div>

            @if ($blog->thumbnail)
            <div class="mx-auto col-md-5">
                <div class="imgContainer mx-auto mb-2 d-flex justify-content-start align-items-center">
                    <div class="mx-3">
                        <img style="width: 150px; height: 150px; background-position: center;"
                            src="/storage/{{$blog->thumbnail}}" alt="{{$blog->title}}">
                    </div>
                    <div>
                        <span>Current Thumbnail</span>
                    </div>
                </div>

                <div class="form-check mb-5">
                    <input class="form-check-input me-2" name="checkBox" type="checkbox" value="true"
                        id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3c">
                        <span class="text-danger">Remove Thumbnail</span>
                    </label>
                </div>
            </div>
            @endif

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                    <option {{$category->id == old('category_id',$blog->category_id) ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update Blog</button>
            </div>
        </form>
    </x-card-wrapper>

</x-layout>
