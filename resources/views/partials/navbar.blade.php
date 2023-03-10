
<nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to right, #3C6255, #61876E);">

  <div class="container">
    <img src="https://i.postimg.cc/RFBwckys/2008-i504-008-P-m005-c25-isometric-online-library-set-02-removebg-preview.png" alt="Lovey" style="width: 50px; height: 50px; margin-right: 10px;">
    <a class="navbar-brand" style="font-family: Playfiredisplay;font-size: 24px; font-weight: bold;" href="/">BookClub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active':''}}" aria-current="page" href="/">Home</a>
        </li>

      </ul>
      <ul class ="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <ul class ="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route ('register')}}">Registrasi</a>
        </li>
    </div>
  </div>
</nav>