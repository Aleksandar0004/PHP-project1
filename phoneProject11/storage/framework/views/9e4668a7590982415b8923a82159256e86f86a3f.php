<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Начална страница</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Добре дошли в приложението за телефони и магазини!</h1>
        <p class="lead">Изберете секция, за да разгледате наличните данни.</p>

        <div class="mt-4">
            <a href="<?php echo e(route('phones.index')); ?>" class="btn btn-primary btn-lg mx-2">Телефони</a>
            <a href="<?php echo e(route('stores.index')); ?>" class="btn btn-success btn-lg mx-2">Магазини</a>
        </div>
    </div>

    <!-- Bootstrap JS (по желание) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\User\OneDrive\Документи\згз\phoneProject11\resources\views/welcome.blade.php ENDPATH**/ ?>