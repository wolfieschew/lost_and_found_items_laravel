<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>about-us</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playpen+Sans:wght@300;500&display=swap"
    rel="stylesheet" />
  <!-- Tailwind JS -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!-- bx bx-icons -->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <!-- flowbite -->
  <link
    href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"
    rel="stylesheet" />
</head>

<body class="font-[Lato] h-screen">
  <header class="bg-white">
    <!-- Header Navigation -->
    <nav class="flex justify-between items-center w-[90%] xl:w-[70%] mx-auto">
      <!-- Logo -->
      <div>
        <img class="mb-3 mt-3 h-[4rem] sm:h-20 cursor-pointer" src="Assets/img/lostnfoundlogo.png" alt="Logo">
      </div>

      <!-- Notification and Profile Section -->
      <div class="flex items-center gap-6 relative">
        <!-- Notification Button -->
        <button id="notification-icon" type="button" class="relative text-[#124076] p-0 w-full h-full items-center rounded-[20%]">
          <i class="bx bxs-bell text-3xl"></i>
          <span id="notification-badge" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-2 hidden">0</span>
        </button>

        <!-- Notification Dropdown -->
        <div id="notification-dropdown" class="absolute top-full mt-2 right-0 w-80 bg-white shadow-lg rounded-lg hidden z-20">
          <!-- <div class="p-2 border-b border-gray-200 flex justify-between items-center">
              <h3 class="font-semibold">Notifikasi</h3>
              <button id="mark-all-read" class="text-xs text-blue-600 hover:underline">Tandai semua dibaca</button>
            </div> -->
          <ul class="divide-y divide-gray-200 max-h-96 overflow-y-auto">
            <li class="p-4 text-center text-gray-500">Tidak ada pemberitahuan baru</li>
          </ul>
        </div>

        <!-- Profile Dropdown -->
        <div class="relative">
          <button id="menuDropdownButton" data-dropdown-toggle="menuDropdown"
            class="flex items-center justify-between text-sm font-medium text-gray-900 rounded-full hover:text-blue-600"
            type="button">
            <img class="w-8 h-8 rounded-full mr-2"
              src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('Assets/img/default-avatar.png') }}"
              alt="User Avatar">
            <span class="whitespace-nowrap">{{ $user->first_name }} {{ $user->last_name }}</span>
            <i class='bx bx-chevron-down text-gray-500 ml-2 text-lg'></i>
          </button>

          <!-- Profile Dropdown Menu -->
          <div id="menuDropdown" class="hidden absolute top-full mt-2 right-0 bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
            <ul class="py-1 text-sm text-gray-700">
              <li><a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Home</a></li>
              <li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a></li>
              <li><a href="{{ route('activity') }}" class="block px-4 py-2 hover:bg-gray-100">Activity</a></li>
              <li><a href="{{ route('about-us') }}" class="block px-4 py-2 hover:bg-gray-100">About Us</a></li>
            </ul>
            <div class="py-1">
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-700 hover:bg-gray-100">
                  Sign out
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Section -->


  <!-- About us Section -->
  <div class="bg-[#91B0D3] min-h-screen py-10 px-20">
    <!-- About Us Section -->
    <section class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
      <div class="relative">
        <img
          src="Assets/img/gambaritems.jpg"
          alt="Background Image"
          class="w-full h-64 object-cover" />
        <div class="absolute inset-0 bg-gray-800 bg-opacity-30 flex items-center justify-center">
          <h1 class="text-white text-4xl font-bold">Tentang Kami</h1>
        </div>
      </div>
      <div class="p-8">
        <p class="text-gray-600">
          Selamat datang di Lost & Found Items, mitra terpercaya Anda dalam menyatukan kembali mahasiswa dengan barang mereka yang hilang. Didirikan pada tahun 2024, misi kami adalah untuk menciptakan platform yang mulus dan efisien yang membantu individu dan komunitas di sekitar Telkom University untuk menemukan kembali barang yang hilang dengan cepat dan mudah.
        </p>
      </div>
    </section>

    <!-- Feedback Section -->
    <section class="max-w-4xl mx-auto mt-8 space-y-8">
      <!-- Give Feedback Card -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-2">Berikan Umpan Balik</h2>
        <p class="text-gray-600 mb-4">
          Bagaimana Anda menggambarkan pengalaman Anda setelah menggunakan layanan kami untuk membantu Anda menemukan barang yang hilang?
        </p>
        <div class="flex space-x-2">
          <!-- Star Ratings -->
          <span class="star text-gray-300 text-2xl cursor-pointer" data-value="1">&#9733;</span>
          <span class="star text-gray-300 text-2xl cursor-pointer" data-value="2">&#9733;</span>
          <span class="star text-gray-300 text-2xl cursor-pointer" data-value="3">&#9733;</span>
          <span class="star text-gray-300 text-2xl cursor-pointer" data-value="4">&#9733;</span>
          <span class="star text-gray-300 text-2xl cursor-pointer" data-value="5">&#9733;</span>
        </div>
      </div>

      <!-- Feedback Section -->
      <section class="max-w-4xl grid grid-cols-2 gap-2 mx-auto mt-8">
        <!-- Give Feedback Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-semibold mb-2">Deskripsi Umpan Balik</h2>
          <p class="text-gray-600 mb-4">
            Bagaimana Anda menggambarkan pengalaman Anda setelah menggunakan produk kami untuk membantu Anda menemukan barang yang hilang?
          </p>
          <textarea id="feedback-description"
            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="4"
            placeholder="Write your feedback"></textarea>
        </div>

        <!-- Comments and Suggestions Card -->
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-semibold mb-2">Komentar dan Saran</h2>
          <p class="text-gray-600 mb-4">
            Bagaimana Anda menggambarkan pengalaman Anda setelah menggunakan produk kami untuk membantu Anda menemukan barang yang hilang?
          </p>
          <textarea id="comments-suggestions"
            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="4"
            placeholder="Write your comment"></textarea>

          <div class="mt-3"></div>
          <button type="button" onclick="sendFeedbackToGmail()" class="text-white bg-[#124076] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Submit</button>
        </div>
      </section>
  </div>

  </section>
  </div>

  <!-- Footer Section -->
  <footer class="bg-[#124076]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="#" class="flex items-center">
            <img
              src="Assets/img/lostnfoundlogowhite.png"
              class="h-28 me-3"
              alt="FlowBite Logo" />
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2
              class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">
              About
            </h2>
            <ul class="text-white font-medium">
              <li class="mb-4">
                <a href="about-us-non-log.html" class="hover:underline">About Lost and Found Items</a>
              </li>
            </ul>
          </div>
          <div>
            <h2
              class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">
              Lost and Found Items
            </h2>
            <ul class="text-white font-medium">
              <li class="mb-4">
                <a
                  href="#"
                  class="hover:underline">Lost Items</a>
              </li>
              <li>
                <a
                  href="#"
                  class="hover:underline">Found Items</a>
              </li>
            </ul>
          </div>
          <div>
            <h2
              class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">
              Legal
            </h2>
            <ul class="text-white font-medium">
              <li class="mb-4">
                <a href="about-us.php" class="hover:underline">Feedback</a>
              </li>
              <li>
                <a href="terms-condition.html" class="hover:underline">Terms &amp; Conditions Lost and Found Items</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-white sm:mx-auto" />
      <div class="text-center sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-white text-center">© 2025 <a href="/" class="hover:underline">Lost and Found Team</a>.
          All Rights Reserved.
        </span>
      </div>
    </div>
  </footer>

  <!-- Navigasi -->
  <script>
    // Navigasi Responsif
    const navLinks = document.querySelector(".nav-links");

    function onToggleMenu(e) {
      e.name = e.name === "menu" ? "close" : "menu";
      navLinks.classList.toggle("top-[11%]");
    }

    // Dropdown Notifikasi
    // document.getElementById("notification-icon").addEventListener("click", function(event) {
    //   event.stopPropagation(); // Mencegah bubbling
    //   const dropdown = document.getElementById("notification-dropdown");
    //   dropdown.classList.toggle("hidden");
    // });

    // Dropdown Profil
    document.getElementById("menuDropdownButton").addEventListener("click", function(event) {
      event.stopPropagation(); // Mencegah bubbling
      const menuDropdown = document.getElementById("menuDropdown");
      menuDropdown.classList.toggle("hidden");
    });

    // Tutup Dropdown Saat Klik di Luar
    document.addEventListener("click", function(event) {
      const notificationDropdown = document.getElementById("notification-dropdown");
      const profileDropdown = document.getElementById("menuDropdown");

      // Tutup notifikasi jika klik di luar
      if (!notificationDropdown.contains(event.target) && !event.target.closest("#notification-icon")) {
        notificationDropdown.classList.add("hidden");
      }

      // Tutup menu profil jika klik di luar
      if (!profileDropdown.contains(event.target) && !event.target.closest("#menuDropdownButton")) {
        profileDropdown.classList.add("hidden");
      }
    });

    // Feedback Email
    function sendFeedbackToGmail() {
      const feedback = document.getElementById('feedback-description').value.trim();
      const comments = document.getElementById('comments-suggestions').value.trim();
      const rating = selectedRating; // Mengambil rating dari variabel yang sudah ada

      // Validasi input sebelum mengirim
      if (!feedback || !comments) {
        alert("Harap lengkapi feedback dan komentar sebelum mengirim.");
        return;
      }

      if (rating === 0) {
        alert("Harap berikan rating bintang sebelum mengirim.");
        return;
      }

      // Email tujuan - ganti dengan email yang sebenarnya
      const email = 'your-email@example.com'; // GANTI DENGAN EMAIL ANDA
      const subject = 'Feedback Lost and Found Items';
      const body = `Rating: ${rating} bintang\n\nFeedback:\n${feedback}\n\nKomentar dan Saran:\n${comments}\n\nDikirim oleh: ${document.querySelector('#menuDropdownButton span').textContent.trim()}`;

      // Opsi 1: Menggunakan mailto (akan membuka email client default)
      // window.location.href = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

      // Opsi 2: Menggunakan Gmail (uncomment jika ingin menggunakan Gmail)
      const gmailURL = `https://mail.google.com/mail/?view=cm&fs=1&to=${encodeURIComponent(email)}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
      window.open(gmailURL, '_blank');

      // Tampilkan pesan sukses
      alert("Terima kasih atas feedback Anda!");
    }

    // Peringkat Bintang
    const stars = document.querySelectorAll('.star');
    let selectedRating = 0;

    stars.forEach((star, index) => {
      star.addEventListener('click', () => {
        selectedRating = index + 1; // Dapatkan peringkat berdasarkan bintang yang diklik
        updateStars(selectedRating);
      });

      star.addEventListener('mouseover', () => {
        updateStars(index + 1); // Sorot bintang saat hover
      });

      star.addEventListener('mouseout', () => {
        updateStars(selectedRating); // Kembali ke peringkat terpilih saat keluar dari hover
      });
    });

    function updateStars(rating) {
      stars.forEach((star, index) => {
        if (index < rating) {
          star.classList.remove('text-gray-300');
          star.classList.add('text-yellow-400');
        } else {
          star.classList.remove('text-yellow-400');
          star.classList.add('text-gray-300');
        }
      });
    }
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Cek notifikasi saat halaman dimuat
      loadNotifications();

      // Toggle dropdown notifikasi
      document.getElementById('notification-icon').addEventListener('click', function(e) {
        e.stopPropagation();
        const dropdown = document.getElementById('notification-dropdown');
        dropdown.classList.toggle('hidden');

        // Refresh notifikasi ketika dropdown dibuka
        if (!dropdown.classList.contains('hidden')) {
          loadNotifications();
        }
      });

      // Tutup dropdown ketika klik di luar
      document.addEventListener('click', function(e) {
        const icon = document.getElementById('notification-icon');
        const dropdown = document.getElementById('notification-dropdown');
        if (!icon.contains(e.target) && !dropdown.contains(e.target)) {
          dropdown.classList.add('hidden');
        }
      });

      // Tombol "Tandai semua dibaca"
      // const markAllReadBtn = document.createElement('div');
      // markAllReadBtn.classList.add('p-2', 'border-b', 'border-gray-200', 'flex', 'justify-between', 'items-center');
      // markAllReadBtn.innerHTML = `
      //   <h3 class="font-semibold">Notifikasi</h3>
      //   <button id="mark-all-read" class="text-xs text-blue-600 hover:underline">Tandai semua dibaca</button>
      // `;

      // document.getElementById('notification-dropdown').prepend(markAllReadBtn);

      document.getElementById('mark-all-read').addEventListener('click', function() {
        markAllNotificationsAsRead();
      });
    });

    function loadNotifications() {
      fetch('/notifications')
        .then(response => response.json())
        .then(data => {
          updateNotificationBadge(data);
          displayNotifications(data);
        })
        .catch(error => console.error('Error fetching notifications:', error));
    }

    function updateNotificationBadge(notifications) {
      const unreadCount = notifications.filter(n => n.is_read === 0).length;
      const badge = document.getElementById('notification-badge');

      badge.textContent = unreadCount;

      if (unreadCount === 0) {
        badge.classList.add('hidden');
      } else {
        badge.classList.remove('hidden');
      }
    }

    function displayNotifications(notifications) {
      const container = document.getElementById('notification-dropdown').querySelector('ul');
      container.innerHTML = '';

      if (notifications.length === 0) {
        container.innerHTML = '<li class="p-4 text-center text-gray-500">Tidak ada notifikasi</li>';
        return;
      }

      notifications.forEach(notif => {
        const li = document.createElement('li');
        li.className = `p-3 border-b ${notif.is_read === 0 ? 'bg-blue-50' : ''}`;

        // Format tanggal
        const date = new Date(notif.created_at);
        const formattedDate = date.toLocaleString('id-ID', {
          day: 'numeric',
          month: 'short',
          hour: '2-digit',
          minute: '2-digit'
        });

        li.innerHTML = `
        <div class="flex justify-between items-start">
          <div class="flex-1">
            <p class="text-gray-600 text-sm">${notif.message}</p>
            <p class="text-gray-400 text-xs mt-1">${formattedDate}</p>
          </div>
          <button class="text-red-500 text-xs ml-2" onclick="deleteNotification(${notif.id})">
            <i class="bx bx-trash"></i>
          </button>
        </div>
      `;

        if (notif.is_read === 0) {
          const markReadBtn = document.createElement('button');
          markReadBtn.className = 'text-xs text-blue-600 mt-1';
          markReadBtn.textContent = 'Tandai sudah dibaca';
          markReadBtn.onclick = () => markAsRead(notif.id);

          li.querySelector('.flex-1').appendChild(markReadBtn);
        }

        container.appendChild(li);
      });
    }

    function markAsRead(id) {
      fetch(`/notifications/${id}/read`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            loadNotifications();
          }
        });
    }

    function markAllNotificationsAsRead() {
      fetch('/notifications/read-all', {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            loadNotifications();
          }
        });
    }

    function deleteNotification(id) {
      fetch(`/notifications/${id}`, {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            loadNotifications();
          }
        });
    }
  </script>


</body>

</html>