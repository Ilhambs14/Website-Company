<nav id="navbar" class="bg-white sticky top-0 z-50 h-[85px] transition-transform duration-300">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
      <!-- Logo -->
      <div class="w-[45px] ml-[10px] flex">
        <img src="./img/becoollogo.png" alt="">
        <h1 class="ml-5 mt-3 text-lg text-[#00A19B] font-bold">Becool</h1>
        <h1 class="ml-2 mt-3 text-lg text-[#E3883E] font-bold">Indonesia</h1>
      </div>

      <!-- Burger Icon -->
      <div class="relative lg:hidden">
        <button id="burger-menu" class="text-black focus:outline-none">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="dropdown-menu"
          class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <ul class="py-2">
            <li>
              <a href="index.php"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#00A19B] transition">Beranda</a>
            </li>
            <li>
              <a href="about.php"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#00A19B] transition">Tentang Kami</a>
            </li>
            <li>
              <a href="service.php"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#00A19B] transition">Services</a>
            </li>
            <li>
              <a href="contact.php"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-[#00A19B] transition">Kontak</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Full Menu for Desktop -->
      <div class="hidden lg:flex space-x-8 text-black font-medium text-lg">
        <a href="index.php" class="hover:text-[#00A19B] transition">Beranda</a>
        <a href="about.php" class="hover:text-[#00A19B] transition">Tentang Kami</a>
        <a href="service.php" class="hover:text-[#00A19B] transition">Services</a>
        <a href="contact.php" class="hover:text-[#00A19B] transition">Kontak</a>
      </div>
    </div>
  </nav>
            
      <script>
        const navbar = document.getElementById("navbar");
        const burgerMenu = document.getElementById("burger-menu");
        const dropdownMenu = document.getElementById("dropdown-menu");
      
        let lastScrollTop = 0;
      
        // Toggle dropdown menu on burger click
        burgerMenu.addEventListener("click", () => {
          dropdownMenu.classList.toggle("hidden");
        });
      
        window.addEventListener("scroll", () => {
          let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      
          if (currentScroll > lastScrollTop) {
            // Scroll Down: Hide Navbar
            navbar.classList.add("-translate-y-full");
          } else {
            // Scroll Up: Show Navbar
            navbar.classList.remove("-translate-y-full");
          }
      
          lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent negative scrolling
        });
      </script>
      