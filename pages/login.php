<?php
// Login logic

// Check error on login
$error = array_key_exists('error', $_GET) ? true : false;

// Get the post data
$post = (object)$_POST;

// Login logic
if (isset($post->user) && isset($post->password)) {

    // Success login
    if (Config::$user == $post->user && Config::$password == md5($post->password)) {
        $_SESSION['login'] = true;
        header("Location: /admin");

    // Error login
    } else {
        header("Location: /login?error=1");
    }
// Already logged
} else if (isset($_SESSION['login'])) {
    header("Location: /admin");
}
?>
<div class="logincontainer d-flex justify-content-center">
    <form method="post" class="my-5 bg-white p-3">
        <h1 class="text-center">Login</h1>
        <div class="mb-3">
            <label for="user" class="form-label">Username / email</label>
            <input type="text" class="form-control" id="user" name="user" required placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
        <?php if($error) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            Wrong username or password
        </div>
        <?php endif; ?>
    </form>
</div>