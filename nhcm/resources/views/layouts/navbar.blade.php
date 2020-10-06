<!--Navbar-->
<nav class="navbar navbar-expand-lg " style="background-color: #105a35">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="{{url('/')}}">
    <img border="0" alt="logo" src="http://localhost:8080/nhcmedicalp/nhcm/public/boostf/img/logo/ICEmedical.jpg" width="100" height="50"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto"  id="myTab" >
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{url('/')}}">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('/content')}}">Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('/aboutus')}}">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('/contactus')}}">Contact us</a>
      </li>


    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->