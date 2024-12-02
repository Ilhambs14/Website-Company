<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css"
        integrity="sha512-6p+GTq7fjTHD/sdFPWHaFoALKeWOU9f9MPBoPnvJEWBkGS4PKVVbCpMps6IXnTiXghFbxlgDE8QRHc3MU91lJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @layer base {
            body {
                font-family: 'Poppins', sans-serif;
            }

        }
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>

    <div id="home" class="h-[300px] bg-gray-100 bg-gradient-to-t from-[#cffdfc] via-white to-white flex items-center">
        <div class="container mx-auto px-4 ml-10">
            <!-- Breadcrumb -->
            <nav class="text-sm text-[#00A19B] mb-5">
                <a href="index.php" class="hover:underline">Home</a>
                <span class="mx-2">›</span>
                <span>Service</span>
            </nav>
            <!-- Title and Description -->
            <h1 class="lg:text-5xl text-4xl  font-bold text-[#00A19B]">Service</h1>
            <p class="mt-5 text-xs lg:text-base text-[#00A19B]">
                Tim teknisi kami yang berpengalaman mampu menangani <br>berbagai layanan perbaikan yang komprehensif.            </p>
        </div>
    </div>

    


    </div>


    <div id="services" class="h-screen bg-white-300 flex items-center">
        <div class="container mx-auto px-4 sm:px-8 lg:px-16 flex flex-wrap lg:flex-nowrap items-center">
            <!-- Bagian Teks -->
            <div class="lg:w-1/2 w-full mt-5 mr-5 mb-12 lg:mb-0">
                <h2 class="lg:text-5xl text-xl lg:mt-0 mt-[100px] font-bold text-gray-800  font-poppins">
                    Apa yang Harus Anda Ketahui
                </h2>
                <p class="text-xs lg:text-base text-gray-500 mt-4">
                    Perawatan rutin seperti mengganti filter dapat dilakukan oleh sebagian besar konsumen, tetapi yang lain memerlukan layanan profesional. Diperlukan keahlian khusus untuk melakukan pemeriksaan mendalam pada sistem AC Anda. <br><br> Perawatan tahunan AC yang sebenarnya memerlukan tangan yang berpengalaman dan tidak boleh dianggap enteng karena ada beberapa hal yang memerlukan kalibrasi dan pemeriksaan cermat yang dapat menghilangkan banyak masalah.
                </p>
            </div>
    
            <!-- Bagian Gambar -->
            <div class="lg:w-1/2 w-full flex justify-center">
                <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/8-1.png" alt="Background Image"
                    class="object-cover rounded-lg shadow-lg md:max-w-md lg:max-w-lg mt-[-35px] lg:mt-0 md:mt-0" />
            </div>
        </div>
    </div>
    
    <div id="air" class="h-[300px] bg-[#cffdfc] flex items-center">
        <div class="container mx-auto px-4 sm:px-8 lg:px-16 flex flex-wrap lg:flex-nowrap items-center">
            <!-- Bagian Teks -->
            <div class="lg:w-1/2 w-full mt-5 mb-12 lg:mb-0">
                <h2 class="lg:text-4xl text-3xl font-bold font-poppins text-gray-800 ml-10">
                    Paket <span class="text-[#00A19B]"><br>Layanan AC</span>
                </h2>
            </div>
    
            <!-- Bagian Deskripsi -->
            <div class="lg:w-1/2 w-full flex justify-center">
                <p class="text-gray-500 text-xs lg:text-base text-center lg:text-left">
                    Berlangganan paket layanan kami agar <br>
                    bebas repot sepanjang tahun dan <br>
                    lebih hemat biaya.
                </p>
            </div>
        </div>
    </div>
    

    <div id="air" class="h-auto bg-white-100 flex items-center">
    <div class="container mx-auto px-4 sm:px-8 lg:px-16 flex flex-wrap items-center justify-center mt-10">
        <div class="text-center mb-12 w-full">
            <h2 class="lg:text-4xl text-xl font-bold text-gray-800 font-poppins">Layanan Umum AC</h2>
            <p class="mt-5 w-full lg:w-[800px] mx-auto lg:text-base text-xs">
                Cocok untuk rumah tinggal dan komersial. Sistem pendingin udara adalah peralatan yang diatur yang memerlukan perawatan yang tepat oleh ahli untuk memastikan sistem pendingin udara bekerja pada tingkat optimal.
            </p>
            <div class="flex flex-wrap justify-center gap-6 mt-8">
                <!-- Card 1 -->
                <a href="#"
                    class="block w-[300px] sm:w-[350px] md:w-[400px] p-6 bg-[#E7FDFD] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">1 fan-coil unit</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">$40</p>
                </a>
                <!-- Card 2 -->
                <a href="#"
                    class="block w-[300px] sm:w-[350px] md:w-[400px] p-6 bg-[#E7FDFD] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">2 fan-coil unit</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">$40</p>
                </a>
                <!-- Card 3 -->
                <a href="#"
                    class="block w-[300px] sm:w-[350px] md:w-[400px] p-6 bg-[#E7FDFD] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">3 fan-coil unit</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">$40</p>
                </a>
                <!-- Card 4 -->
                <a href="#"
                    class="block w-[300px] sm:w-[350px] md:w-[400px] p-6 bg-[#E7FDFD] border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">4 fan-coil unit</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">$40</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="services" class="h-auto bg-white-300 flex items-center py-8">
  <div class="container mx-auto px-4 sm:px-8 lg:px-16 flex flex-wrap lg:flex-nowrap items-center">
      <!-- Bagian Gambar -->
      <div class="lg:w-1/2 w-full flex justify-center mb-6 lg:mb-0">
          <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/Bioaire-Home-Page-collage-6.png" 
              alt="Background Image" 
              class="object-cover rounded-lg shadow-lg w-full max-w-md lg:max-w-full" />
      </div>

      <!-- Bagian Teks -->
      <div class="lg:w-md w-full lg:ml-7 ml-0 md:ml-0">
          <h2 class="lg:text-4xl text-xl font-bold text-gray-800 font-poppins mb-5 text-center lg:text-left">
            Ruang Lingkup Pekerjaan
          </h2>
          <ul class="max-w-lg text-xs lg:text-base mx-auto lg:mx-0 space-y-5 text-blue-gray list-disc list-inside dark:text-gray-400 ">
            <li>Pembongkaran/Pelepasan Seluruh Unit Fan-Coil</li>
            <li>Perombakan Kimiawi pada Evaporator Coil & Komponennya</li>
            <li>Penyedotan/Pembilasan Sistem Drainase</li>
            <li>Pemeriksaan Semua Kontrol & Pengaturan</li>
            <li>Pelumasan Komponen yang Bergerak (jika perlu)</li>
            <li>Penyedotan/Pembilasan Sistem Drainase</li>
            <li>Pemasangan Ulang Seluruh Unit Fan-Coil</li>
            <li>Pengujian & Pengoperasian Sistem</li>
          </ul>
      </div>
  </div>
</div>
<div id="services" class="h-auto bg-white-300 flex items-center py-8">
  <div class="container mx-auto px-4 sm:px-8 lg:px-16 flex flex-wrap lg:flex-nowrap items-center">
      <!-- Bagian Teks -->
      <div class="lg:w-1/2 w-full mt-5 lg:mt-0 mb-12 lg:mb-0">
          <h2 class="lg:text-4xl text-xl font-bold text-gray-800 tracking-wide font-poppins mb-5 text-center lg:text-left">
            Berbagai Manfaat
          </h2>
          <p class="text-xs lg:text-base text-gray-500 mt-4 text-center lg:text-left">
            Kami berdedikasi untuk membantu pelanggan kami membeli dan merawat unit pendingin udara mereka semurah mungkin. Itulah sebabnya kami bekerja sangat keras untuk menjaga biaya tetap rendah sambil mempertahankan tingkat kualitas yang sangat tinggi. Kami tahu bahwa pendingin udara adalah kebutuhan, bukan keinginan, dan kami peka untuk bersikap sehemat mungkin terhadap dompet pelanggan kami selama pembelian, perbaikan, dan perawatan unit pendingin udara mereka.
          </p>
      </div>

      <!-- Bagian Gambar -->
      <div class="lg:w-1/2 w-full flex justify-center">
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-2 md:max-w-[48rem]">
              <!-- Card 1 -->
              <div
                  class="relative overflow-hidden rounded-lg border bg-white hover:shadow-md p-4">
                  <div class="flex h-[180px] flex-col justify-between items-center text-center">
                      <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/high-quality.png" alt=""
                          class="w-10 mb-4">
                      <h3 class="font-bold text-sm">Kualitas tinggi</h3>
                      <p class="text-xs text-gray-500">Kami menjamin bahan, tenaga kerja, dan pengerjaan kami.</p>
                  </div>
              </div>
              <!-- Card 2 -->
              <div
                  class="relative overflow-hidden rounded-lg border bg-white hover:shadow-md p-4">
                  <div class="flex h-[180px] flex-col justify-between items-center text-center">
                      <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/problem-solving.png" alt=""
                          class="w-10 mb-4">
                      <h3 class="font-bold text-sm">Solusi Terbaik</h3>
                      <p class="text-xs text-gray-500">Kami dapat memberikan solusi terbaik untuk sistem Anda dan sistem lainnya.</p>
                  </div>
              </div>
              <!-- Card 3 -->
              <div
                  class="relative overflow-hidden rounded-lg border bg-white hover:shadow-md p-4">
                  <div class="flex h-[180px] flex-col justify-between items-center text-center">
                      <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/affordable.png" alt=""
                          class="w-10 mb-4">
                      <h3 class="font-bold text-sm">Terjangkau</h3>
                      <p class="text-xs text-gray-500">Layanan Berkualitas dengan Harga Terjangkau dan pemeliharaan AC mereka.</p>
                  </div>
              </div>
              <!-- Card 4 -->
              <div
                  class="relative overflow-hidden rounded-lg border bg-white hover:shadow-md p-4">
                  <div class="flex h-[180px] flex-col justify-between items-center text-center">
                      <img src="https://bioaireaircon.com.sg/wp-content/uploads/2023/07/add-group.png" alt=""
                          class="w-10 mb-4">
                      <h3 class="font-bold text-sm">Staf yang Ramah</h3>
                      <p class="text-xs text-gray-500">Spesialis Kenyamanan kami yang terlatih ramah dan berpengetahuan luas.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>





    <footer class="bg-[#195d5b] text-gray-200 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <img src="./img/becoollogo.png" class="h-[65px]" alt="">
                    <p class="text-gray-400 text-xs mt-5    ">Jujur dalam bekerja, cepat dan tanggap menerima dan melayani
                        komplain ,kepuasan
                        pelanggan adalah priority utama kami</p>
                </div>

                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h2 class="text-lg font-semibold text-white mb-4">Alamat</h2>
                    <p class="text-sm">Jl. Contoh Alamat No. 123</p>
                    <p class="text-sm">Teluk Tering, Batam Kota, Batam City, Riau Islands 29444</p>
                    <h2 class="text-lg font-semibold text-white mt-6 mb-4">Kontak</h2>
                    <p class="text-sm">Telepon: (0778) 462881</p>
                </div>

                <div class="w-full md:w-1/3">
                    <h2 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h2>
                    <div class="flex space-x-4">

                        <a href="https://www.instagram.com" target="_blank"
                            class="text-gray-400  transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"
                                fill="rgba(173,184,194,1)">
                                <path
                                    d="M13.0281 2.00073C14.1535 2.00259 14.7238 2.00855 15.2166 2.02322L15.4107 2.02956C15.6349 2.03753 15.8561 2.04753 16.1228 2.06003C17.1869 2.1092 17.9128 2.27753 18.5503 2.52503C19.2094 2.7792 19.7661 3.12253 20.3219 3.67837C20.8769 4.2342 21.2203 4.79253 21.4753 5.45003C21.7219 6.0867 21.8903 6.81337 21.9403 7.87753C21.9522 8.1442 21.9618 8.3654 21.9697 8.58964L21.976 8.78373C21.9906 9.27647 21.9973 9.84686 21.9994 10.9723L22.0002 11.7179C22.0003 11.809 22.0003 11.903 22.0003 12L22.0002 12.2821L21.9996 13.0278C21.9977 14.1532 21.9918 14.7236 21.9771 15.2163L21.9707 15.4104C21.9628 15.6347 21.9528 15.8559 21.9403 16.1225C21.8911 17.1867 21.7219 17.9125 21.4753 18.55C21.2211 19.2092 20.8769 19.7659 20.3219 20.3217C19.7661 20.8767 19.2069 21.22 18.5503 21.475C17.9128 21.7217 17.1869 21.89 16.1228 21.94C15.8561 21.9519 15.6349 21.9616 15.4107 21.9694L15.2166 21.9757C14.7238 21.9904 14.1535 21.997 13.0281 21.9992L12.2824 22C12.1913 22 12.0973 22 12.0003 22L11.7182 22L10.9725 21.9993C9.8471 21.9975 9.27672 21.9915 8.78397 21.9768L8.58989 21.9705C8.36564 21.9625 8.14444 21.9525 7.87778 21.94C6.81361 21.8909 6.08861 21.7217 5.45028 21.475C4.79194 21.2209 4.23444 20.8767 3.67861 20.3217C3.12278 19.7659 2.78028 19.2067 2.52528 18.55C2.27778 17.9125 2.11028 17.1867 2.06028 16.1225C2.0484 15.8559 2.03871 15.6347 2.03086 15.4104L2.02457 15.2163C2.00994 14.7236 2.00327 14.1532 2.00111 13.0278L2.00098 10.9723C2.00284 9.84686 2.00879 9.27647 2.02346 8.78373L2.02981 8.58964C2.03778 8.3654 2.04778 8.1442 2.06028 7.87753C2.10944 6.81253 2.27778 6.08753 2.52528 5.45003C2.77944 4.7917 3.12278 4.2342 3.67861 3.67837C4.23444 3.12253 4.79278 2.78003 5.45028 2.52503C6.08778 2.27753 6.81278 2.11003 7.87778 2.06003C8.14444 2.04816 8.36564 2.03847 8.58989 2.03062L8.78397 2.02433C9.27672 2.00969 9.8471 2.00302 10.9725 2.00086L13.0281 2.00073ZM12.0003 7.00003C9.23738 7.00003 7.00028 9.23956 7.00028 12C7.00028 14.7629 9.23981 17 12.0003 17C14.7632 17 17.0003 14.7605 17.0003 12C17.0003 9.23713 14.7607 7.00003 12.0003 7.00003ZM12.0003 9.00003C13.6572 9.00003 15.0003 10.3427 15.0003 12C15.0003 13.6569 13.6576 15 12.0003 15C10.3434 15 9.00028 13.6574 9.00028 12C9.00028 10.3431 10.3429 9.00003 12.0003 9.00003ZM17.2503 5.50003C16.561 5.50003 16.0003 6.05994 16.0003 6.74918C16.0003 7.43843 16.5602 7.9992 17.2503 7.9992C17.9395 7.9992 18.5003 7.4393 18.5003 6.74918C18.5003 6.05994 17.9386 5.49917 17.2503 5.50003Z">
                                </path>
                            </svg>
                        </a>

                        <a href="https://www.facebook.com" target="_blank"
                            class="text-gray-400  transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"
                                fill="rgba(173,184,194,1)">
                                <path
                                    d="M12.001 2C6.47813 2 2.00098 6.47715 2.00098 12C2.00098 16.9913 5.65783 21.1283 10.4385 21.8785V14.8906H7.89941V12H10.4385V9.79688C10.4385 7.29063 11.9314 5.90625 14.2156 5.90625C15.3097 5.90625 16.4541 6.10156 16.4541 6.10156V8.5625H15.1931C13.9509 8.5625 13.5635 9.33334 13.5635 10.1242V12H16.3369L15.8936 14.8906H13.5635V21.8785C18.3441 21.1283 22.001 16.9913 22.001 12C22.001 6.47715 17.5238 2 12.001 2Z">
                                </path>
                            </svg>
                        </a>

                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="text-gray-400  transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"
                                fill="rgba(173,184,194,1)">
                                <path
                                    d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z">
                                </path>
                            </svg>
                        </a>

                        <a href="https://www.tiktok.com/@becool_idn?is_from_webapp=1&sender_device=pc" target="_blank"
                            class="text-gray-400  transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(173,184,194,1)"><path d="M16 8.24537V15.5C16 19.0899 13.0899 22 9.5 22C5.91015 22 3 19.0899 3 15.5C3 11.9101 5.91015 9 9.5 9C10.0163 9 10.5185 9.06019 11 9.17393V12.3368C10.5454 12.1208 10.0368 12 9.5 12C7.567 12 6 13.567 6 15.5C6 17.433 7.567 19 9.5 19C11.433 19 13 17.433 13 15.5V2H16C16 4.76142 18.2386 7 21 7V10C19.1081 10 17.3696 9.34328 16 8.24537Z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>