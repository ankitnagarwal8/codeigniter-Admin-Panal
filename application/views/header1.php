
	<!-- Navbar -->
<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">W3School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"> About</a></li>
      <li><a href="#">servies</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url("Login"); ?>">login</a></li>
          <li><a href="<?= base_url("/Student/Registration"); ?>">Registration</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav> -->
<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="active">HOME</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">ABOUT</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url("Login"); ?>">login</a></li>
          <li><a href="<?= base_url("/Student/Registration"); ?>">Registration</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
