<?php include 'partials/header.php';?>
<?php require_once 'partials/functions.php';?>


<?php
$ascErr = '';
$asc    = '';
$output = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['asc'] == '') {
        $ascErr = "Ascii code is required";
    } else {
        $asc = validateData($_POST['asc']);

        $output = chr($asc);

    }
}

?>

    <div class="container mx-auto">
        <?php include 'partials/navbar.php';?>

            <div class="w-full max-w-3xl mx-auto lg:my-32 my-6">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="asc">
                           ASCII CODE
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="character" type="text" name="asc" placeholder="Enter Character" value="<?php echo $asc; ?>">
                        <?php if ($ascErr != ''): ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 mt-2 py-3 rounded relative" role="alert">
                            <strong class="font-bold"><?php echo $ascErr; ?></strong>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="character">
                            OUTPUT (CHARACTER)
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="character" readonly name="output" placeholder="ASCII CODE"
                        value="<?php echo preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $output) ? preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $output) : 'Non printable character'; ?>">

                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            CONVERT TO CHARACTER
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-500 text-xs">
                    &copy; <?php echo date('Y'); ?> <a class="underline" href="https://mishajib.com">MI SHAJIB</a>. ALL RIGHTS RESERVED.
                </p>
        </div>
    </div>


<?php include 'partials/footer.php';?>