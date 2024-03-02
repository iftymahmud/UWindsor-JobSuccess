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
          <h2>Hello <strong><?php echo e(auth()->user()->username); ?></strong>, Let's get started</h2>
          <p class="lead text-muted">Work on tasks and projects below in your field that are relevant to renowned companies. Use your expertise to create innovative solutions or provide insightful analysis. Share your work through our platform. </p>
        </div>
      </div>





    
      <div class="container">
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #3</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #4</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #5</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #6</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #7</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #8</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #9</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renowned Company #10</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum est urna, non eleifend augue euismod ullamcorper. Cras molestie nibh neque. Donec dui ante, rhoncus ut luctus aliquet, cursus euismod turpis.</p>
                <a href="#" class="btn btn-success btn-sm">Go to tasks</a>
              </div>
            </div>
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
<?php endif; ?><?php /**PATH /Users/iftymahmud/Desktop/ase-project/resources/views/homefeed.blade.php ENDPATH**/ ?>