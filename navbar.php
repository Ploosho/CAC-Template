<?php
include_once "common.php";
include_once "theme.php";
?>
<ul>
    <img src="https://catsarecute.xyz/logo.png" width="48px"/>
    <li><a href="/contact.php" class="c">Contact</a></li>
    <li><a href="/home.php" class="c">Home</a></li>
    <li><a href="/about.php" class="c">About</a></li>
    <li><button class="c" onclick="change('lang', '<?php echo antilangify(); ?>');"><?php echo antilangify(); ?></button></li>
    <li><button class="c" onclick="change('theme', '<?php echo antithemeify(); ?>');"><?php echo translate_antitheme(); ?></button></li>
</ul>
<br>
<br>
<script>
change = (item, val) => {
    document.cookie = `${item}=${val}`;
    location.reload();
}
</script>