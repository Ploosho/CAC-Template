<?php include_once "common.php" ?>
<meta name="theme-color" content="#5F2CD1">
<style>

  a.lnk:link, a.lnk:visited {
    color: #ff0000;
    background-color: #1ebba3;
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #099983;
    text-decoration: none;
  }
  
  a {
    text-decoration: none;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  li {
    float: right;
  }

  img {
      float: left;
  }

  a.c {
    display: block;
    padding: 8px;
    background-color: #5d5d5d;
    color: <?php echo colorify(); ?>;
  }
    

  button.c {
    display: block;
    padding: 8px;
    background-color: #5d5d5d;
    color: <?php echo anticolorify(); ?>;
    border: 0px;
    font-size: 16px;
  }

  a.lnk:hover, a.lnk:active {
    background-color: #9c6ae1;
    border-color: #7443b6;
  }

  div, p, h1, h2, h3 {
    text-align: center;
  }

  h1 {
    font-size: 50px;
  }

  h2 {
    font-size: 38px;
  }

  @font-face {
    font-family: "Cascadia Code PL";
    src: url("assets/CascadiaCodePL.woff2");
  }

  * {
    font-family: "Cascadia Code PL";
  }

  p {
    font-size: 26px;
  }

  button, body {
    color: <?php echo colorify(); ?>;
  }

  body {
    background-image: url("<?php echo $img_endpoint, bgify(); ?>.jpg");
  }

  button {
    background-color: <?php echo anticolorify(); ?>;
    border: 0px;
    font-size: 16px;
  }

  div {
    border: 2px <?php echo colorify(); ?> dotted;
  }
</style>
