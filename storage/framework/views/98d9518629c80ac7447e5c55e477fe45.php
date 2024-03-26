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
        <a href="#"><img class="avatar-tiny" src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_640.png" /></a>
        
        Posted by <a href="/profile/<?php echo e($post->userForeign->username); ?>"><?php echo e($post->userForeign->username); ?></a> on <?php echo e($post->created_at->format('n/j/Y')); ?>

      </p>

      

      <div class="body-content">
        <p><?php echo e($post->body); ?></p>
      </div>

      <?php if($post->pdf_path): ?>
        <a class="btn btn-warning btn-sm" href="<?php echo e(Storage::url($post->pdf_path)); ?>" target="_blank">View PDF</a>
      <?php endif; ?>
      
    </div>









     

     <div class="container py-md-5 container--narrow">
      <form action="/post/<?php echo e($post->id); ?>/comments" method="POST">
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <textarea class="form-control" name="body" required placeholder="Submit your task here..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit Task</button>
      </form>
    </div>


    <div class="container py-md-5 container--narrow">
      <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card my-2">
              <div class="card-body">
                  <h5 class="card-title">Submission by <a href="/profile/<?php echo e($comment->user->username); ?>">
                    <?php echo e($comment->user->username); ?>

                </a></h5>
                  <p class="card-text"><?php echo e($comment->body); ?></p>
                  
              </div>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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