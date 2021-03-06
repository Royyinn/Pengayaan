<!doctype html> 
<html lang="en"> 
  <head> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
     
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My Css --> 
    <link rel="stylesheet" href="<?= baseurl; ?>/asset/style.css"/> 
    <title>My Portofolio | Royyin Ruyyani</title> 
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/favicon.ico" />

  </head> 
  <body id ="Home"> 
    <!-- Navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top"> 
        <div class="container"> 
          <a class="navbar-brand" href="#">
            <img src="asset/img/rpl.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy"> 
        </a> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
          </button> 
          <div class="collapse navbar-collapse" id="navbarNav"> 
            <ul class="navbar-nav ms-auto"> 
              <li class="nav-item"> 
                <a class="nav-link active" aria-current="page" href="#">Home</a> 
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="#about">About</a> 
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="#projects">Projects</a> 
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="#contact">Contact</a> 
              </li> 
 
            </ul> 
          </div> 
        </div> 
      </nav> 
      <!-- Akhir Navbar --> 
      
      <!-- jumbotron --> 
      <?php foreach($data ['profile'] as $pro) : ?>
      <section class ="jumbotron atas text-center"> 
        <img src="<?=baseurl;?>/asset/img/<?=$pro['foto']; ?>" alt="" width = "200" class="img-thumbnail image rounded-circle"> 
        <h1 class="display-4"><?=$pro['nama'];?></h1> 
        <p class="lead"><?=$pro['jabatan']; ?> | <?=$pro['perusahaan']; ?></p> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,138.7C384,128,480,96,576,80C672,64,768,64,864,96C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> 
 
 
      </section> 
      <?php endforeach ?>
 
      
      <!-- Akhir jumbotron --> 
      <!-- About --> 
      <section id="about"> 
        <div class="container"> 
          <div class="row text-center mb-3"> 
            <div class="col"> 
              <h2>About Me</h2> 
            </div> 
          </div> 
          <div class="row justify-content-center fs-5 text-center">
            <?php foreach($data['about'] as$ab) :?>
            <div class="col-md-4"> 
              <p><?=$ab['column1']; ?></p> 
            </div> 
            <div class="col-md-4"> 
              <p><?=$ab['column2']; ?></p> 
            </div>
            <?php endforeach?> 
          </div> 
        </div> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,128L40,144C80,160,160,192,240,181.3C320,171,400,117,480,96C560,75,640,85,720,112C800,139,880,181,960,208C1040,235,1120,245,1200,234.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> 
 
      </section> 
      <!-- akhir About --> 
 
      <!-- projects --> 
        <section id="projects"> 
          <div class="container"> 
            <div class="row text-center mb-3"> 
              <div class="col"> 
                <h2>My projects</h2> 
              </div> 
            </div> 
            <div class="row justify-content-center text-center">
              <?php foreach($data['project'] as $pro) :?>
                <div class="col-md-3 mb-3">
                    <div class="card" >
                        <img src="<?=baseurl;?>/asset/img/projects/<?=$pro['foto']; ?>" class="card-img-top" alt="foto_project">
                        <div class="card-body">
                          <h3><?=$pro['nama_p']; ?></h3>
                          <p class="card-text"><?=$pro['ket']; ?></p>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,112C320,96,400,96,480,106.7C560,117,640,139,720,154.7C800,171,880,181,960,192C1040,203,1120,213,1200,186.7C1280,160,1360,96,1400,64L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </section> 
    <!-- akhir projects --> 

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="<?=baseurl;?>/portofolio/pesan" method="POST">
                        <div class="mb-3">
                          <label for="name" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_k"
                            id="name" aria-describedby="name" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email"
                            id="email" aria-describedby="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">pesan</label>
                            <textarea class="form-control" name="pesan" 
                            id="pesan" rows="3" required></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                      </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,213.3C320,203,400,149,480,149.3C560,149,640,203,720,218.7C800,235,880,213,960,176C1040,139,1120,85,1200,58.7C1280,32,1360,32,1400,32L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- akhir contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
        <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/ruyanioin/" class="text-white fw-bold">Royyin Ruyyani</a></p>
    </footer>
    <!-- Akhir Footer -->
 
    <!-- Optional JavaScript; choose one of the two! --> 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS --> 
    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
    --> 
  </body> 
</html>

