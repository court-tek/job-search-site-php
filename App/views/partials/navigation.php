<?php 

    
?>
<!-- Nav -->
<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="/">endeed</a>
        </h1>
        <nav class="space-x-4">
            <a href="login.html" class="text-white hover:underline">Login</a>
            <a href="register.html" class="text-white hover:underline">Register</a>
            <a href="/listings/new" class="<?php echo ($_SERVER['REQUEST_URI'] == '/listings/new') ? 'invisible' : '' ?> bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
            <i class="fa fa-edit"></i>Post a Job</a>
        </nav>
    </div>
</header>
