<x-layout>
    
        <div class="container py-md-5 container--narrow">
          <form action="/create-post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="post-title" class="text-muted mb-1"><small>Title</small></label>
              <input value="{{old('title')}}" name="title" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
              @error('title')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror
            </div>
    
            <div class="form-group">
              <label for="post-body" class="text-muted mb-1"><small>Body Content</small></label>
              <textarea name="body" id="post-body" class="body-content tall-textarea form-control" type="text">{{old('body')}}</textarea>
              @error('body')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror
            </div>
    
            <div class="form-group">
              <label for="post-pdf" class="text-muted mb-1"><small><i class="fa-solid fa-file-pdf"></i> Upload PDF</small></label>
              <input type="file" name="pdf" id="post-pdf" class="form-control pb-5" accept=".pdf">
          </div>

          <div class="form-group">
            <label for="post-url" class="text-muted mb-1"><small><i class="fa-solid fa-paperclip"></i> Add URL Resource</small></label>
            <input name="url" id="post-url" class="form-control" type="text" placeholder="Enter URL" />
        </div>
      
          <button class="btn btn-primary">Save New Post</button>
          </form>
        </div>

</x-layout>