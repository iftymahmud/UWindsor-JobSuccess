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
      
    </div>









     {{-- THIS IS DEMO COMMENT! NEEDS TO BE DELETED --}}

     <div class="container py-md-5 container--narrow">
      <form action="/post/{{$post->id}}/comments" method="POST">
          @csrf
          <div class="form-group">
              <textarea class="form-control" name="body" required placeholder="Submit your task here..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit Task</button>
      </form>
    </div>


    <div class="container py-md-5 container--narrow">
      @foreach($post->comments as $comment)
          <div class="card my-2">
              <div class="card-body">
                  <h5 class="card-title">Submission by <a href="/profile/{{ $comment->user->username }}">
                    {{ $comment->user->username }}
                </a></h5>
                  <p class="card-text">{{ $comment->body }}</p>
                  {{-- If you need these buttons for each comment, uncomment them
                  <a href="#" class="btn btn-primary btn-sm">Details</a>
                  <a href="#" class="btn btn-success btn-sm">Approve</a>
                  <a href="#" class="btn btn-warning btn-sm">Reject</a>
                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                  --}}
              </div>
          </div>
      @endforeach
  </div>
  
  


    
</x-layout>
