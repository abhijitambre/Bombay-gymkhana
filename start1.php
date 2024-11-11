<?php include 'header-link.php' ?>
  <style>
    .input1_inner input {
      padding: 10px;
    }
  </style>
<div class="preloader-bg"></div>
  <div id="preloader">
    <div id="preloader-status">
      <div class="preloader-position loader"> <span></span> </div>
    </div>
  </div>
  <!-- Progress scroll totop -->
  <div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <?php include 'menu.php' ?>
<style>
  body {
    background-color: #222;
  }

  .container {
    width: 100%;
    text-align: center;
    position: relative;
  }

  .box {
    width: auto;
    height: 500px;
    background: #222;
    margin-left: 100px;
    margin-right: 100px;
    border-radius: 5px;
    box-shadow: 1px 1px 20px 3px #00000036;
  }

  .animation {
    margin-top: 20%;
    display: inline-block;
    margin-bottom: 5%;
  }

  h1 {
    font-size: 32px;
    font-weight: 400;
    text-transform: uppercase;
    margin: 0;
  }

  p {
    font-size: 16px;
    font-weight: 700;
    margin: 0;
  }

  a {
    color: #f6921e;
    font-weight: bold;
    text-decoration: none;
    margin-left: 5px;
  }

  .one,
  .two,
  .three {
    display: block;
    float: left;
  }

  .one {
    background: url('/images/setting.png');
    width: 80px;
    height: 80px;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin-top: -10px;
    margin-right: 8px;
  }

  .two {
    background: url('/images/setting1.png');
    width: 100px;
    height: 100px;
    background-size: 100% 100%;
    background-repeat: no-repeat;
  }
  .three {
    background: url('/images/setting.png');
    width: 80px;
    height: 80px;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin-top: -50px;
    margin-left: -10px;
  }

  @keyframes spin-one {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(-359deg);
      transform: rotate(-359deg);
    }
  }

  .spin-one {
    -webkit-animation: spin-one 1.5s infinite linear;
    animation: spin-one 1.5s infinite linear;
  }

  @keyframes spin-two {
    0% {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      -webkit-transform: rotate(-359deg);
      transform: rotate(359deg);
    }
  }

  .spin-two {
    -webkit-animation: spin-two 2s infinite linear;
    animation: spin-two 2s infinite linear;
  }
</style>
<div class="container" style="
    padding: 148px 0;
">
  <div class="box">
    <div class="animation">
      <div class="one spin-one"></div>
      <div class="two spin-two"></div>
      <div class="three spin-one"></div>
    </div>
    <h1>Under maintenance</h1>
    <p>Maintenance screen for<a href="/myprofile.php" target="_blank">Bombay Gymkhana</a></p>
  </div>
</div>
<?php include 'footer.php' ?>
  <?php include 'footer-link.php' ?>