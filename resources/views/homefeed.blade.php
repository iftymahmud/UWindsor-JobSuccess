<x-layout>
    <div class="container py-md-5 container--narrow">
        <div class="text-center">
          <h2>Hello <strong>{{auth()->user()->username}}</strong>, Welcome to JobSuccess.</h2>
          <p class="lead text-muted">Work on tasks and projects below in your field that are relevant to renowned companies. Use your expertise to create innovative solutions or provide insightful analysis. Share your work through our platform. </p>
        </div>
      </div>





      <div class=" container py-md-4 px-4 my-5 box2">
        <h3 class="text-white py-2">Top 3 Recruiters</h3>
        <div class="row">
            @foreach ($topPosters as $poster)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $poster->username }}</h5>
                            <p><i class="fa-solid fa-briefcase"></i> Tasks Posted: {{ $poster->posts_count }}</p>
                            <a href="/profile/{{ $poster->username }}" class="btn btn-info btn-sm">View Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


      




      {{-- DELETE THE BELOW ------ DEMO BOOTSTRAP!! --}}
      <div class="container">
        <div class="row box py-4">
          @foreach ($posts as $post)
          <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ \Illuminate\Support\Str::words($post->body, 20, '...') }}</p>
                      <a href="/post/{{ $post->id }}" class="btn btn-success btn-sm">Go To Task</a>
                  </div>
              </div>
          </div>
      @endforeach
          
    </div>



    {{-- +++++++++++++++++ --}}

    {{-- <nav aria-label="Page navigation example" class="my-5">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="/">1</a></li>
        <li class="page-item">
          <a class="page-link" href="/">Next</a>
        </li>
      </ul>
    </nav> --}}

    


    <div class="card my-5">
      <img src="https://www.uwindsor.ca/research-innovation-services/sites/uwindsor.ca.research-innovation-services/files/styles/page_hero/public/uwindsorcanadatopper2.jpg?itok=fFqGmfcF" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="/resources" class="mx-1 card-title btn btn-lg btn-warning">University Resources</a>
        <a href="https://www.uwindsor.ca/registrar/uwinsite-student" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">UWinSite</a>
        <a href="https://success.uwindsor.ca/home.htm" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">mySuccess</a>
        <a href="https://www.uwindsor.ca/career-development-experiential/job-fair" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">Job Fair</a>
      </div>
    </div>







    <div class="py-md-4 px-4 my-5 box2">
      <h3 class="mb-3 text-white"><iframe src="https://giphy.com/embed/lQ2jfoMmsEEL5XuJnF" width="48" height="48" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>Top 3 Students</h3>
      <div class="row">
          @foreach ($topStudents as $student)
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $student->username }}</h5>
                          <p><i class="fa-solid fa-star"></i> Received: {{ $student->stars_received_count }}</p>
                          <a href="/profile/{{ $student->username }}" class="btn btn-info btn-sm">View Profile</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    </div>


    <div class="card my-5 bg-warning">
      <div class="card-header">
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <h4>"Someone is sitting in the shade today because someone planted a tree a long time ago."</h4>
          <footer class="blockquote-footer">Warren Buffett</footer>
        </blockquote>
      </div>
    </div>


    


    

    
</x-layout>