<?php $__env->startSection('container'); ?>

<style>
.form-registration {
  max-width: 330px;
  padding: 15px;
}

.form-registration .form-floating:focus-within {
  z-index: 2;
}

.form-registration input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-registration input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
                <?php echo csrf_field(); ?>
              <h1 class="h3 mb-3 fw-normal">Register form</h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
            <small>Allready registered? <a href="/login">Register </a></small>
        </main>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\Videos\GSLC10\resources\views/register/index.blade.php ENDPATH**/ ?>