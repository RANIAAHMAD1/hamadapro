<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .error {
            color: #ae1c17;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item active">
                    <a class="nav-link"
                       href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>"> <?php echo e($properties['native']); ?>

                        <span class="sr-only">(current)</span></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <?php echo e(__('messages.Add your offer')); ?>


        </div>
        '
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>

        <br>
<form method="post" action="<?php echo e(route('offers.store')); ?>">
<?php echo csrf_field(); ?>
    <div class="form-group">

        <label for="exampleInputPassword1">Offer Name</label>
        <input type="text" class="form-control" name="name"  placeholder="name">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="form-text text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Offer Price</label>
        <input type="text" class="form-control" name="price" placeholder="price">
        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="form-text text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">details</label>
        <input type="text" class="form-control" name="details"placeholder="details">
        <?php $__errorArgs = ['details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

        <small class="form-text text-danger"><?php echo e($message); ?></small>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>
    <button type="submit" class="btn btn-primary"><?php echo e(__('messages.Save Offer')); ?></button>


</form>

    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\User\Desktop\hamadapro\resources\views/offers/create.blade.php ENDPATH**/ ?>