<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form action="<?php echo e(url('/submit_login')); ?>" method="post">
    <?php echo csrf_field(); ?> 

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>

</body>
</html>
<?php /**PATH C:\Users\Alejandro\Desktop\pokemon-crud\resources\views/pokemons/login.blade.php ENDPATH**/ ?>