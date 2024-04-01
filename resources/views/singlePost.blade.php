<x-layout>


    <div class="container py-md-5 container--narrow">
      <div class="d-flex justify-content-between">
        <h2>{{$post->title}}</h2>

        @if ($flag==1)
        <span class="pt-2">
          <form class="delete-post-form d-inline" action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
          </form>
        </span>
        @endif
        

      </div>

      <p class="text-muted small mb-4">
        <a href="#"><img class="avatar-tiny" src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_640.png" /></a>
        {{-- Posted by <a href="#">{{$post->userForeign->username}}</a> on {{$post->created_at->format('n/j/Y')}} --}}
        Posted by <a href="/profile/{{$post->userForeign->username}}">{{$post->userForeign->username}}</a> on {{$post->created_at->format('n/j/Y')}}
      </p>

      

      <div class="body-content">
        <p>{{$post->body}}</p>
      </div>

      @if($post->pdf_path)
        <a class="btn btn-warning btn-sm" href="{{ Storage::url($post->pdf_path) }}" target="_blank">View PDF</a>
      @endif
      
      @if($post->url)
        <a href="{{ $post->url }}" class="btn btn-danger btn-sm" target="_blank">View Resource</a>
      @endif
      
    </div>









     {{-- THIS IS DEMO COMMENT! NEEDS TO BE DELETED --}}

     <div class="container py-md-3 container--narrow box">
      <h5>Submit your task here</h5>
      <form action="/post/{{$post->id}}/comments" method="POST">
          @csrf
          <div class="form-group">
              <textarea class="form-control" name="body" required placeholder="Write here..."></textarea>
          </div>
          <div class="form-group">
            <label for="comment-url">URL (optional)</label>
            <input type="text" name="url" id="comment-url" class="form-control" placeholder="Enter URL">
        </div>
          <button type="submit" class="btn btn-sm btn-info">Submit Task</button>
      </form>
    </div>





    <div class="container my-4 py-md-5 container--narrow bg-dark">
      @foreach($post->comments as $comment)
      <div class="row">
        <div class="col-10">
          <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title">Submission by <a href="/profile/{{ $comment->user->username }}">
                  {{ $comment->user->username }}
              </a></h5>
                <p class="card-text">{{ $comment->body }}</p>
                @if($comment->url)
                  <a href="{{ $comment->url }}" target="_blank">View Link</a>
                @endif
            </div>
        </div>
        </div>
        <div class="col-2">
          <div class="my-2 py-2">
            @if ($post->user_id == auth()->id())
            <form action="/comment/{{$comment->id}}/star" method="POST">
              @csrf
              <button class="btn btn-warning btnbg" type="submit">
                @if($comment->star)
                    <i class="fa-solid fa-star"></i>
                @else
                <i class="fa-regular fa-star"></i>
                @endif
            </button>
            </form>
          @endif

          @if(auth()->id() == $comment->user_id)
            <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
              </form>
          @endif

          </div>
        </div>
      </div>        
      @endforeach
  </div>
  
  


    
</x-layout>
