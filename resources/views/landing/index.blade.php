<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome | Lost and Found Items</title>
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!-- Boxicons CSS -->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playpen+Sans:wght@300;500&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- Header Section -->
  <header>
    <nav>
      <div class="logo">
        <img src="Assets/img/lostnfoundlogo.png" height="70px" />
      </div>
      <ul id="menuList">
        <li><a class="login-btn" href="{{ route('login') }}">Log in</a></li>
        <li><a class="sign-up btn" href="{{ route('register') }}">Sign Up</a></li>
      </ul>
      <div class="menu-icon">
        <i class="bx bx-menu" onclick="toggleMenu()"></i>
      </div>
    </nav>
  </header>
  <!-- Header Section -->

  <!-- jumbotron Section -->
  <section>
    <div class="jumbotron-section">
      <div class="content">
        <h1>Temukan <span>Barang Hilang</span> Anda di Sini!</h1>
        <p>Kami hadir untuk membantu Anda menemukan barang yang hilang atau melaporkan barang yang ditemukan. Mulailah pencarian atau laporkan barang Anda sekarang.</p>
        <a href="{{ route('landing.items') }}"><button>Daftar Laporan</button></a>
      </div>
    </div>
  </section>

  <!-- jumbotron Section -->

  <!-- How About Section -->
  <section>
    <div class="main-content">
      <div class="main">
        <h3>
          Bagaimana Layanan <span>Lost and Found Items</span> Membantu Anda
        </h3>
        <p>Bagaimana cara kerja nya?</p>
      </div>
      <div class="container">
        <div class="item">
          <div class="box"><i class="bx bx-task"></i></div>
          <p>Melaporkan Barang yang hilang dan ditemukan</p>
        </div>
        <div class="item">
          <div class="box"><i class="bx bxs-user-check"></i></div>
          <p>Buktikan Kepemilikan Barang Tersebut</p>
        </div>
        <div class="item">
          <div class="box"><i class="bx bxs-package"></i></div>
          <p>Dapatkan Barang Anda Kembali</p>
        </div>
      </div>
    </div>
  </section>
  <!-- How About Section -->

  <section>
    <div class="feedback-section">
      <div class="feedback-main">
        <h3>
          Apa Kata Mereka Tentang Layanan <span style="color: #004274;">Lost and Found Items</span> Ini?
        </h3>
        <p>Bagaimana tanggapan mereka?</p>
      </div>
      <div class="container">
        <!-- Card 1 -->
        <div class="feedback-card">
          <div class="feedback-header">
            <img src="Assets/img/furr1.webp" alt="User Avatar" class="avatar" />
            <div class="user-info">
              <h4>NaKki</h4>
              <p>⭐⭐⭐⭐☆</p>
            </div>
          </div>
          <p class="feedback-text">
            Layanan ini sangat membantu saya menemukan barang yang hilang. Prosesnya cepat dan mudah. Terima kasih banyak!
          </p>
        </div>

        <!-- Card 2 -->
        <div class="feedback-card">
          <div class="feedback-header">
            <img src="Assets/img/furr2.jpg" alt="User Avatar" class="avatar" />
            <div class="user-info">
              <h4>Darren Warren</h4>
              <p>⭐⭐⭐⭐⭐</p>
            </div>
          </div>
          <p class="feedback-text">
            Sangat direkomendasikan! Saya berhasil menemukan dompet saya berkat sistem ini.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="feedback-card">
          <div class="feedback-header">
            <img src="Assets/img/furr3.jpg" alt="User Avatar" class="avatar" />
            <div class="user-info">
              <h4>Vyse</h4>
              <p>⭐⭐⭐⭐⭐</p>
            </div>
          </div>
          <p class="feedback-text">
            Saya berhasil menemukan KTM saya yang hilang berkat layanan ini. Sangat membantu!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Dummy Metrics Section -->

  <!-- Advice Section -->
  <!-- advice section start -->
  <section>
    <div class="advice-main">
      <div class="advice-container">
        <div class="img">
          <img src="Assets/img/bulp2.svg" height="100px" />
        </div>
        <div class="advice-content">
          <h3>Anda Harus Tau</h3>
          <p>
            Jika Anda menambahkan Pin lokasi map ke laporan Anda, Anda
            meningkatkan lebih dari <span>50% peluang Anda</span> untuk
            menemukan barang yang hilang
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Advice Section -->

  <!-- Dummy Metrics Section -->
  <section class="metrics">
    <h3></h3>
    <div class="metric-item">
      <i style="font-size: 2.5rem; color: #004274;" class='bx bx-happy-alt'></i>
      <h3>1,000+</h3>
      <p>Mahasiswa Senang</p>
    </div>
    <div class="metric-item">
      <i style="font-size: 2.5rem; color: #004274;" class='bx bx-task'></i>
      <h3>135+</h3>
      <p>Laporan Dibuat</p>
    </div>
    <div class="metric-item">
      <i style="font-size: 2.5rem; color: #004274;" class='bx bxs-star'></i>
      <h3>95%</h3>
      <p>Mahasiswa Puas</p>
    </div>
    <div class="metric-item">
      <i style="font-size: 2.5rem; color: #004274;" class='bx bxs-box'></i>
      <h3>200+</h3>
      <p>Barang Berhasil Ditemukan</p>
    </div>
  </section>

  <section>
    <div class="faq-section">
      <div class="faq-main">
        <h3>Pertanyaan yang <span style="color: #004274;">Sering Diajukan</span></h3>
        <p>Lost and Found Items FaQ</p>
      </div>
      <div class="faq-container">
        <!-- Pertanyaan 1 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <h4>Apa itu Lost and Found Items?</h4>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>
              Lost and Found Items adalah layanan yang membantu mahasiswa mahasiwi Telkom University menemukan barang yang hilang atau melaporkan barang yang ditemukan.
            </p>
          </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <h4>Bagaimana cara melaporkan barang hilang?</h4>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>
              Anda dapat melaporkan barang hilang dengan mengisi formulir di halaman laporan kami. Informasi detail akan membantu mempercepat proses.
            </p>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <h4>Apakah ada biaya untuk menggunakan layanan Lost and Found?</h4>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>
              Layanan Lost and Found kami tidak dikenakan biaya. Kami menyediakan layanan ini secara gratis untuk membantu Anda mengembalikan barang yang hilang atau menemukan barang yang terlewat.
            </p>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <h4>Apakah saya bisa mendapatkan barang saya kembali tanpa menunjukkan bukti kepemilikan?</h4>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>
              Untuk memastikan barang dikembalikan kepada pemilik yang sah, kami memerlukan bukti kepemilikan. Anda bisa menunjukkan tanda pengenal, foto barang, atau deskripsi rinci yang bisa membuktikan bahwa barang tersebut milik Anda.
            </p>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleFaq(this)">
            <h4>Bagaimana cara menghindari penyalahgunaan sistem Lost and Found Items?</h4>
            <span class="toggle-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>
              Untuk menghindari penyalahgunaan sistem Lost and Found, kami meminta semua pengguna untuk memberikan deskripsi barang yang seakurat mungkin saat melaporkan barang yang hilang atau ditemukan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Report Section -->
  <section>
    <div class="report-main">
      <div class="report">
        <div class="report-content">
          <h2>Laporkan Barang Anda!</h2>
        </div>
        <div class="report-section">
          <div class="report-btn">
            <a href="{{ route('login') }}"><button type="submit">Saya Telah Kehilangan</button></a>
          </div>
          <div class="report-btn">
            <a href="{{ route('login') }}"><button type="submit">Saya Telah Menemukan</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Report Section -->


  <!-- Footer Section -->
  <section>
    <div class="footer">
      <div class="footer-main">
        <div class="fotter-img">
          <a href="#"><img src="Assets/img/lostnfoundlogowhite.png" height="85px" /></a>
        </div>
      </div>
      <div class="footer-section">
        <div class="footer-content">
          <h3>About</h3>
          <ul>
            <a href="about-us-non-log.html">
              <li>About Lost and Found Items</li>
            </a>
            <!-- <a><li>Feedback</li></a> -->
            <a href="terms-condition.html">
              <li>Terms and Condition Lost And Found Items</li>
            </a>
            <!-- <a><li>Feedback</li></a> -->
            <a href="terms-condition.html">
              <li>FaQ</li>
            </a>
          </ul>
        </div>
        <div class="footer-content">
          <h3>Lost and Found Items</h3>
          <ul>
            <a href="non-log-dasboard.php">
              <li>Lost Items</li>
            </a>
            <a href="non-log-dasboard.php">
              <li>Found Items</li>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section -->

  <script>
    let menuList = document.getElementById("menuList");
    menuList.style.maxHeight = "0px";

    function toggleMenu() {
      if (menuList.style.maxHeight == "0px") {
        menuList.style.maxHeight = "300px";
      } else {
        menuList.style.maxHeight = "0px";
      }
    }
  </script>

  <script>
    function toggleFaq(element) {
      const parent = element.parentElement;

      // Tutup semua FAQ lainnya
      const allItems = document.querySelectorAll(".faq-item");
      allItems.forEach((item) => {
        if (item !== parent) {
          item.classList.remove("open");
        }
      });

      // Toggle FAQ yang dipilih
      parent.classList.toggle("open");
    }
  </script>

  <script
    src="https://kit.fontawesome.com/f8e1a90484.js"
    crossorigin="anonymous"></script>

</body>

</html>