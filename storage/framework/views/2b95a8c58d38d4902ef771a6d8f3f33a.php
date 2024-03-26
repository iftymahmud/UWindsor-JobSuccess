<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container py-md-5 container--narrow">
        <div class="text-center">
          <h2>Hello <strong><?php echo e(auth()->user()->username); ?></strong>, Welcome to JobSuccess.</h2>
          <p class="lead text-muted">Work on tasks and projects below in your field that are relevant to renowned companies. Use your expertise to create innovative solutions or provide insightful analysis. Share your work through our platform. </p>
        </div>
      </div>


      




      
      <div class="container">
        <div class="row box py-4">
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                  <div class="card-body bg-dark text-white">
                      <h5 class="card-title"><?php echo e($post->title); ?></h5>
                      <p class="card-text"><?php echo e(\Illuminate\Support\Str::words($post->body, 20, '...')); ?></p>
                      <a href="/post/<?php echo e($post->id); ?>" class="btn btn-success btn-sm">Go To Task</a>
                  </div>
              </div>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
    </div>



    

    <nav aria-label="Page navigation example" class="my-5">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="/">1</a></li>
        <li class="page-item">
          <a class="page-link" href="/">Next</a>
        </li>
      </ul>
    </nav>

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


    <div class="card mb-3">
      <img src="https://www.uwindsor.ca/research-innovation-services/sites/uwindsor.ca.research-innovation-services/files/styles/page_hero/public/uwindsorcanadatopper2.jpg?itok=fFqGmfcF" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="/resources" class="mx-1 card-title btn btn-lg btn-warning">University Resources</a>
        <a href="https://www.uwindsor.ca/registrar/uwinsite-student" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">UWinSite</a>
        <a href="https://success.uwindsor.ca/home.htm" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">mySuccess</a>
        <a href="https://www.uwindsor.ca/career-development-experiential/job-fair" target="BLANK" class="mx-1 card-title btn btn-lg btn-danger">Job Fair</a>
      </div>
    </div>



    

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH /Users/iftymahmud/Desktop/ase-project/resources/views/homefeed.blade.php ENDPATH**/ ?>