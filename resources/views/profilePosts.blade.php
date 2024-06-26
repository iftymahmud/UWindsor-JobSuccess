<x-layout>

    <div class="container py-md-5 container--narrow">
        <h2>
          <img class="avatar-small" src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_640.png" /> {{$username}}
          {{-- <form class="ml-2 d-inline" action="#" method="POST">
            <button class="btn btn-primary btn-sm">Follow <i class="fas fa-user-plus"></i></button>
            <!-- <button class="btn btn-danger btn-sm">Stop Following <i class="fas fa-user-times"></i></button> -->
          </form> --}}
        </h2>
  
        <div class="profile-nav nav nav-tabs pt-2 mb-4">
          <a href="#" class="profile-nav-link nav-item nav-link active">Tasks: {{$postCount}}</a>
          {{-- <a href="#" class="profile-nav-link nav-item nav-link">Followers: 3</a>
          <a href="#" class="profile-nav-link nav-item nav-link">Following: 2</a> --}}
          <div class="bg-warning profile-nav-link nav-item nav-link"><i class="fa-solid fa-star"></i> Received: {{ $user->starsReceived()->count() }}</div>

          <div class="bg-danger profile-nav-link nav-item nav-link">
            <a href="mailto:{{ $user->email }}" class="text-white" style="text-decoration: none;">
                <i class="fas fa-envelope"></i> Email
            </a>
        </div>


        </div>
  
        <div class="list-group">

          @foreach ($posts as $post)
          <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
            <img class="avatar-tiny" src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_640.png" />
            <strong>{{$post->title}}</strong> on {{$post->created_at->format('n/j/Y')}}
          </a>
          @endforeach      
          
          
        </div>
      </div>

</x-layout>