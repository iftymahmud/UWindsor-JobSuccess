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
        <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
        Posted by <a href="#">{{$post->userForeign->username}}</a> on {{$post->created_at->format('n/j/Y')}}
      </p>

      <div class="body-content">
        <p>{{$post->body}}</p>
      </div>
    </div>


    {{-- THIS IS DEMO COMMENT! NEEDS TO BE DELETED --}}

    <div class="container py-md-5 container--narrow">
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title">Submission by Student #1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
          <a href="#" class="btn btn-primary btn-sm">Details</a>
          <a href="#" class="btn btn-success btn-sm">Approve</a>
          <a href="#" class="btn btn-warning btn-sm">Reject</a>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title">Submission by Student #2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
          <a href="#" class="btn btn-primary btn-sm">Details</a>
          <a href="#" class="btn btn-success btn-sm">Approve</a>
          <a href="#" class="btn btn-warning btn-sm">Reject</a>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title">Submission by Student #3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
          <a href="#" class="btn btn-primary btn-sm">Details</a>
          <a href="#" class="btn btn-success btn-sm">Approve</a>
          <a href="#" class="btn btn-warning btn-sm">Reject</a>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
      <div class="card my-2">
        <div class="card-body">
          <h5 class="card-title">Submission by Student #4</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
          <a href="#" class="btn btn-primary btn-sm">Details</a>
          <a href="#" class="btn btn-success btn-sm">Approve</a>
          <a href="#" class="btn btn-warning btn-sm">Reject</a>
          <a href="#" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
    </div>

    
</x-layout>
