<? include_once "./components/head.php" ?>

<body>
<? include_once "./components/header.php" ?>
<main class="main">
    <?
    $pages = ['main-page', 'contact-us', 'our-works', 'staff'];
    $page = trim(strip_tags($_GET['page']));

    if (!$page) include_once "./pages/main-page.php";
    elseif (!in_array($page, $pages)) echo "<p class='not-found'>Такой страницы не существует</p>";
    else include_once "./pages/$page.php";
    ?>
</main>
</body>


<? include_once "./components/footer-links.php" ?>
