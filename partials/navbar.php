<ul class="flex border-b justify-center">
    <li class="<?php echo (($_SERVER['PHP_SELF'] == "/index.php" || $_SERVER['PHP_SELF'] == "/") ? '-mb-px' : '') ?> mr-1">
        <a class="bg-white inline-block py-2 px-4 font-semibold <?php echo (($_SERVER['PHP_SELF'] == "/index.php" || $_SERVER['PHP_SELF'] == "/") ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800') ?>" href="index.php">CHARACTER TO ASCII</a>
    </li>
    <li class="<?php echo ($_SERVER['PHP_SELF'] == "/char.php" ? '-mb-px' : '') ?> mr-1">
        <a class="bg-white inline-block py-2 px-4 font-semibold <?php echo ($_SERVER['PHP_SELF'] == "/char.php" ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800') ?>" href="char.php">ASCII TO CHARACTER</a>
    </li>
</ul>
