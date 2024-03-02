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
      <div class="d-flex justify-content-between">
        <h2><?php echo e($post->title); ?></h2>

        <?php if($flag==1): ?>
        <span class="pt-2">
          <form class="delete-post-form d-inline" action="/post/<?php echo e($post->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
          </form>
        </span>
        <?php endif; ?>
        

      </div>

      <p class="text-muted small mb-4">
        <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
        Posted by <a href="#"><?php echo e($post->userForeign->username); ?></a> on <?php echo e($post->created_at->format('n/j/Y')); ?>

      </p>

      <div class="body-content">
        <p><?php echo e($post->body); ?></p>
      </div>
    </div>


    

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

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /Users/iftymahmud/Desktop/ase-project/resources/views/singlePost.blade.php ENDPATH**/ ?>