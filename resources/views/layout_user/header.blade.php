<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .navbar {
          position: fixed;
          top: 0;
          width: 100%;
          height: 80px;
          z-index: 9999;
          border-bottom: 2px solid rgba(255, 255, 255, 0.144); /* tambahkan border-bottom pada navbar */
        }
      
        /* tambahkan margin top pada body untuk menghindari konten tertutup oleh navbar */
        body {
          margin-top: 90px;
        }
        
        /* atur posisi search di tengah navbar */
        .navbar-form {
          display: flex;
          justify-content: center;
          align-items: center;
        }
        
        /* ubah warna tombol search */
        .butt {
          background-color: #6B728E;
          border: 2px solid #6B728E;
        }

        .navbar-form input[type="search"] {
        background-color: #F5F5F5;
        width: 550px;
        height: 40px;
        border-radius: 200px;
       
}
      </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color : #635985;  ">
      <div class="container">
        <a href="#">
            <img src="{{ asset('https://i.postimg.cc/RFBwckys/2008-i504-008-P-m005-c25-isometric-online-library-set-02-removebg-preview.png')}}"  alt="BookClub" width="50" height="50">
        </a>
          <a class="navbar-brand" href="/dashboard_user">Perpustakaan LOVey</a>
          <i class="fas fa-book mr-2" style="color: white;"></i> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        <div>

        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 navbar-form">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search book..." aria-label="Search" name="search">
                  <button class="btn btn-primary butt my-2 my-sm-0" type="submit" id="button-addon2" style="border-radius: 40px;">Search</button>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ml-5">
                <a class="nav-link" href="{{route ('login')}}" style="background-color: white; border: 3px solid rgba(64, 47, 214, 0.342); border-radius: 24px;width : 80px; display: flex; justify-content: center; font-weight: bold; color : #635985">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('register')}}">Registrasi</a>
              </li>
            </ul>
          </div>
        </div>
          
  </nav>
</body>
</html>
