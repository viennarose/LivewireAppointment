<div>
    <div class="card bg-dark">
        <div class="card-header bg-light">
            <h3 class="text-center">Add Post</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-4">
                <textarea type="text" name="post" cols="40" rows="20" class="form-control" wire:model.defer="post"></textarea>
                <label for="post">Post</label>
                @error('post')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <select class="form-select" name="category_id" wire:model.defer="category_id">

                <option selected>Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->category}}</option>
                @endforeach
                @error('category_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </select>

            <button class="btn btn-primary mt-3" wire:click="CreatePost()">Post</button>
        </div>
    </div>
</div>
