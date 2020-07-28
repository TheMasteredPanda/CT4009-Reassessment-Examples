<nav>
    <?php if ($_SERVER['PHP_SELF'] === '/users.php') : ?>
        <a href="/index.php">Home Page</a>
    <?php else : ?>
        <a href="/users.php">Users</a>
    <?php endif; ?>
    <a href="#">Blog Posts</a>
    <a href="#">Status</a>
</nav>