<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lkmSiswaMitraAbadi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-[#123524] font-poppins m-0">
    <nav class="flex px-[5%] items-center justify-between shadow-2xl fixed w-full py-4 ">
        <div class="text-1xl font-semibold lg:text-2xl font-inter flex text-white">LKM <span class="italic px-2 text-white">SISWA MITRA ABADI</span></div>
        <div class="hidden sm:block">
            <ul class="flex gap-8">
                <li><a class="navbar-brand text-1xl lg:text-2xl hover:text-[rgb(232,235,72)] font-semibold text-white"href="#home">Home</a></li>
                <li><a class="navbar-brand text-1xl lg:text-2xl hover:text-[rgb(232,235,72)] font-semibold text-white"href="#tentang_kami">Tentang Kami</a></li>
                <li><a class="navbar-brand text-1xl lg:text-2xl hover:text-[rgb(232,235,72)] font-semibold text-white"href="#layanan">Layanan</a></li>
                <li><a class="navbar-brand text-1xl lg:text-2xl hover:text-[rgb(232,235,72)] font-semibold text-white"href="#contact">Contact</a></li>
            </ul>
        </div>
        <img src="{{ asset('asset/menu.png') }}" alt="menu" class="w-8 h-8 sm:hidden" onclick="toggleMenu()">
    </nav>

    <div id="home" class="h-screen flex items-center justify-between px-[5%] py-0 bg-[#123524] flex-col md:flex-row">
        <div class="flex flex-col items-center mt-10 sm:mt-0 md:w-[50%]">
            <img src="{{ asset('asset/logo.png') }}" class="w-[10rem] lg:w-[14rem] logo">
            <div class="text-center wrap flex flex-col items-center gap-2 mt-4 md:text-left md:items-start">
                <h1 class="text-2xl lg:text-4xl font-semibold text-white animate-slideFromTop">Layanan Perbangkan Syariah</h1>
                <h1 class="text-2xl font-bold lg:text-5xl text-[rgb(232,235,72)] italic typing-effect animate-typing">SMK N 1 BANTUL</h1>
                <p class="text-1xl lg:text-2xl text-white animate-slideFromBottom">"Mempersiapkan bank mini sebagai pelopor ekonomi syariah di sekolah"</p>
                <button onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 text-limeGreen hover:bg-limeGreen hover:text-Green w-[20rem] rounded-xl mt-6 hover:shadow-lg animate-slideFromBottom">
                    Contact
                </button>
            </div>
        </div>
        <div class="w-[20rem] h-[20rem] rounded-full bg-limeGreen overflow-hidden lg:w-[25rem] lg:h-[25rem] mb-12 shadow-2xl gambar">
            <img src="{{ asset('asset/home.png') }}" alt="Logo" class="object-cover -translate-y-10 ">
        </div>
     </div>
     <div  id="toggle-content" class="flex-row bottom-0 fixed w-full bg-limeGreen z-20 hidden sm:hidden">
        <div class="flex items-center px-[5%] w-full">
            <ul class="flex justify-between w-full py-4">
                <li><a class="navbar-brand text-1xl hover:text-red-500 text-white"href="#home">Home</a></li>
                <li><a class="navbar-brand text-1xl hover:text-red-500 text-white"href="#tentang_kami">Tentang Kami</a></li>
                <li><a class="navbar-brand text-1xl hover:text-red-500 text-white"href="#layanan">Layanan</a></li>
                <li><a class="navbar-brand text-1xl hover:text-red-500 text-white"href="#contact">Contact</a></li>
            </ul>
        </div>
     </div>
     <div id="tentang_kami" class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/tentang.png') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-white flex flex-col items-center justify-center h-full px-[5%]">
            <div class="lg:w-[70%] text-center">
                <h1  data-aos="fade-up" class="text-4xl font-bold mb-20">Tentang Kami</h1>
                <p  data-aos="fade-up" data-aos-duration="800" class="text-base md:text-2xl">
                    Bank Mini LKM Mitra Siswa Abadi didirikan pada bulan April tahun 2008 dengan tujuan untuk melayani tabungan siswa SMK Negeri 1 Bantul, serta sebagai laboratorium pembelajaran perbankan syariah.
                </p>
                <p  data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" class="text-base md:text-2xl">
                    Visi: Menciptakan bank mini sebagai pelopor ekonomi syariah di sekolah.
                </p>
                <p  data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" class="text-base md:text-2xl">
                    Misi: Melayani sepenuh hati dengan menerapkan prinsip syariah dalam praktik pembelajaran perbankan.
                </p>
            </div>
            <button  data-aos="fade-up" data-aos-duration="800" data-aos-delay="650" onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 w-[20rem] text-limeGreen hover:bg-limeGreen hover:text-white rounded-xl mt-20 hover:shadow-lg">
                Contact
            </button>
        </div>
    </div>
    <div id="layanan" class="w-full text-center flex flex-col justify-center items-center bg-[#123524] my-8 px-[5%]">
        <h1  data-aos="fade-up"  class="text-4xl font-bold  text-white mt-16">Layanan</h1>
        <p  data-aos="fade-up" class="text-base mt-12 px-[5%] md:text-2xl  text-white">
            Kami menyediakan layanan perbankan syariah yang aman dan terpercaya, untuk siswa SMK Negeri 1 Bantul
        </p>
        <div class="flex sm:justify-center mt-16 gap-4 flex-wrap w-full">
            <div data-aos="zoom-in-up" data-aos-duration="1000" class=" w-full h-[20rem] lg:w-[22%] md:w-[16rem] flex flex-col items-center pt-3 rounded-3xl bg-[#34E8FC] shadow-xl relative  hover:shadow-lg hover:shadow-[#34E8FC] hover:-translate-y-2">
                <div class="w-28 h-28 rounded-full bg-white flex justify-center items-center mt-6">
                    <img src="{{ asset('asset/Tabungan syariah.png') }}" alt="Gambar Transfer" class="w-20">
                </div>
                <span class="text-8 font-bold m-4">Tabungan Syariah</span>
                <div class="absolute bottom-4">
                    <button id="openMenabung" class="learn-more">
                        <span aria-hidden="true" class="circle">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Learn More</span>
                      </button>
                </div>
            </div>
            <div id="menabung" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40 px-[5%]">
                <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
                  <button onclick="closemodal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                  </button>
                  <h2 class="text-lg font-semibold text-gray-800">Cara Menabung</h2>
                  <ul class="list-disc text-gray-800 text-left pl-5">
                    <li>MENGUNJUNGI BANK MINI PADA JAM ISTIRAHAT</li>
                    <li>MEMBAWA BUKU REKENING DAN UANG YANG INGIN DITABUNG</li>
                    <li>SERAHKAN BUKU RAKENING DAN UANG KE TELER DAN MINTA UNTUK PROSES MENABUANG</li>

                  </ul>
                  <a href="#contact" onclick="closemodal()" class="mt-2 text-gray-600">menghubungi admin</a>
                </div>
            </div>
            <div  data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="250" class="w-full h-[20rem] lg:w-[22%] md:w-[16rem]  flex flex-col items-center pt-3 rounded-3xl bg-[#FF9B43] shadow-xl relative hover:shadow-lg hover:shadow-[#FF9B43] hover:-translate-y-2">
                <div class="w-28 h-28 rounded-full bg-white flex justify-center items-center mt-6">
                    <img src="{{ asset('asset/Pengambilan tabungan.png') }}" alt="Gambar Transfer" class="w-28 ">
                </div>
                <span class="text-8 font-bold m-4">Pengambilan Tabungan</span>
                <div class="absolute bottom-4 w-[90%] ">
                    <button id="openPengamblan" class="learn-more">
                        <span aria-hidden="true" class="circle">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Learn More</span>
                      </button>
                </div>
            </div>
            <div id="pengambilan" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40 px-[5%]">
                <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
                  <button onclick="closemodal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                  </button>
                  <h2 class="text-lg font-semibold text-gray-800 mb-2">Cara pengambilan tabungan</h2>
                  <ul class="list-disc text-gray-800 text-left pl-5">
                    <li>JIKA NASABAH PRIBADI MEMBAWA BUKU TABUNGAN DAN PENARIKAN TIDAK BOLEH DIAMBIL SEMUA, WAJIB MENGENDAP Rp 10.000</li>
                    <li>JIKA NASABAH ORGANISASI/ KAS KELAS MEMBAWA BUKU TABUNGAN, TANDA TANGAN PENARIK ADALAH 2 ORANG PENGURUS AKTIF/ ORGANISASI DAN PENARIKAN TIDAK BOLEH DIAMBIL SEMUA, WAJIB MENGENDAP Rp 10.000</li>
                  </ul>
                  <a href="#contact" onclick="closemodal()" class="mt-2 text-gray-600">menghubungi admin</a>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500" class="w-full h-[20rem] lg:w-[22%] md:w-[16rem] flex flex-col items-center pt-3 rounded-3xl bg-[#D5E954] shadow-xl relative  hover:shadow-lg hover:shadow-[#D5E954] hover:-translate-y-2">
                <div class="w-28 h-28 rounded-full bg-white flex justify-center items-center mt-6">
                    <img src="{{ asset('asset/pembukaan tabungan.png') }}" alt="Gambar Transfer" class="w-28 ">
                </div>
                <span class="text-8 font-bold m-4">Pembukaan Tabungan</span>
                <div class="absolute bottom-4 w-[90%] ">
                    <button id="openPembukaan" class="learn-more">
                        <span aria-hidden="true" class="circle">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Learn More</span>
                      </button>
                </div>
            </div>
            <div id="pembukaan" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40 px-[5%]">
                <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
                  <button onclick="closemodal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                  </button>
                  <h2 class="text-lg font-semibold text-gray-800 mb-2 ">Cara Pembukaan Tabungan Nasabah Pribadi</h2>
                  <ul class="list-disc text-gray-800 text-left pl-5">
                    <li>SISWA AKTIF DI SMK NEGERI 1 BANTUL</li>
                    <li>MEMBAWA SETORAN AWAL 10.000</li>
                  </ul>
                  <h2 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Cara Pembukaan Tabungan Nasabah Organisasi/ KAS Kelas</h2>
                  <ul class="list-disc text-gray-800 text-left pl-5">
                    <li>FOTO COPY KARTU PELAJAR PENGURUS ORGANISASI</li>
                    <li>MEMBAWA SETORAN AWAL 10.000</li>
                  </ul>
                  <a href="#contact" onclick="closemodal()" class="mt-2 text-gray-600">menghubungi admin</a>
                </div>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="750" class="w-full h-[20rem] lg:w-[22%] md:w-[16rem] flex flex-col items-center pt-3 rounded-3xl bg-[#FF4649] shadow-xl relative  hover:shadow-lg hover:shadow-[#FF4649] hover:-translate-y-2">
                <div class="w-28 h-28 rounded-full bg-white flex justify-center items-center mt-6">
                    <img src="{{ asset('asset/Penutupan tabungan.png') }}" alt="Gambar Transfer" class="w-28 ">
                </div>
                <span class="text-8 font-bold m-4">Penutupan Tabungan</span>
                <div class="absolute bottom-4 w-[90%] ">
                    <button id="openPenutupan" class="learn-more">
                        <span aria-hidden="true" class="circle">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Learn More</span>
                    </button>
                </div>
            </div>
            <div  id="penutupan" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40 px-[5%]">
                <div class="relative w-full max-w-md p-6 bg-white rounded shadow-lg">
                  <button onclick="closemodal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                  </button>
                  <h2 class="text-lg font-semibold text-gray-800 mb-2">Cara Penutupan Tabungan</h2>
                  <ul class="list-disc text-gray-800 text-left pl-5">
                    <li>PENUTUPAN REKENING TABUNGAN DENGAN MENARIK SEMUA TABUNGAN DENGAN SISA SALDO MENGENDAP Rp 5.000</li>
                  </ul>
                  <a href="#contact" onclick="closemodal()" class="mt-2 text-gray-600">menghubungi admin</a>
                </div>
            </div>
        </div>
        <button  data-aos="fade-up" onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 w-[20rem] text-limeGreen hover:bg-limeGreen hover:text-Green rounded-xl mt-16 hover:shadow-lg">
            Contact
        </button>

    </div>

    <div id="contact" class="w-full h-[40rem] text-center flex justify-between items-center px-[5%] py-0 gap-2 bg-[#123524]">
        <section class="w-full">
            <div class="container mx-auto flex flex-col lg:flex-row gap-8">
                <div data-aos="fade-up-right"  data-aos-duration="1000" data-aos-delay="250" class="w-full lg:w-1/2  p-6 rounded-xl bg-[#123524]">
                    <h2 class="text-4xl font-semibold mb-6 text-center text-limeGreen">Kirim Pesan</h2>
                    <form onsubmit="kirimpesan(event)" class="flex flex-col gap-4">
                        <input type="text" name="nama" id="name" placeholder="Your Name" required class="w-full p-3 border-b-2  border-b-limeGreen rounded-xl  bg-[#123524] text-white">
                        <input type="text" name="kelas" id="kelas" placeholder="Your Class" required class="w-full p-3 border-b-2  border-b-limeGreen rounded-xl  bg-[#123524] text-white">
                        <textarea id="about" name="about" placeholder="Your Message" rows="4" required class="w-full p-3 border-b-2 border-b-limeGreen rounded-xl  bg-[#123524] text-white"></textarea>
                        <button type="submit" class="border-2 border-limeGreen text-limeGreen hover:bg-limeGreen hover:text-white px-6 py-3 rounded-full text-lg transition duration-300">Submit</button>
                    </form>
                </div>
                <div data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="450" class="w-full lg:w-1/2 border-2  border-limeGreen rounded-xl overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.049332486135!2d110.35305437550225!3d-7.88990797848821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00889ad8f84d%3A0x2e0009ca7815eaf0!2sSMK%20Negeri%201%20Bantul!5e0!3m2!1sid!2sid!4v1732127607824!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-xl "></iframe>
                </div>
            </div>
            </div>
        </section>
    </div>

    <div class="flex flex-col px-[5%] h-auto ">
        <hr class="w-full border-1 border-limeGreen">
        <div class="flex flex-col justify-between md:flex-row m-4">
            <div class="mt-4 m-2">
                <span class="text-1xl font-semibold text-white">LKM SISWA MITRA ABADI</span>
                <ul class="mt-2">
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white "href="#home">Home</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#tentang_kami">Tentang Kami</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#layanan">Layanan</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="mt-4">
                <span class="text-1xl font-semibold text-white">TENTANG KAMI</span>
                <ul class="mt-2">
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#tentang_kami">Awal Berdiri</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#tentang_kami">Visi</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#tentang_kami">Misi</a></li>
                </ul>
            </div>
            <div class="mt-4">
                <span class="text-1xl font-semibold text-white">LAYANAN</span>
                <ul class="mt-2">
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#layanan">Tabungan Syariah</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#layanani">Pengambilan Tabungan</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#layanani">Pembukaan Tabungan</a></li>
                    <li><a class="navbar-brand text-base hover:text-red-500 text-white"href="#layanan">Penutupan Tabungan</a></li>
                </ul>
            </div>
            <div class="mt-4">
                <span class="text-1xl font-semibold text-white">CONTACT</span>
                <ul class="mt-2 ">
                    <li class="text-base text-white">+6281226962933</li>
                </ul>
            </div>
        </div>
        <hr class="w-full border-1 border-limeGreen ">
        <span class="m-4 text-white flex justify-center mb-16">Copyright by Vilarif. All rights reserved.</span>

    </div>
    <script>
        function kirimpesan(event) {

            event.preventDefault();


            const username = document.getElementById("name").value;
            const userClass = document.getElementById("kelas").value;
            const about = document.getElementById("about").value;


            const url = "https://api.whatsapp.com/send?phone=6281226962933&text=Halo%20saya%20*" +
                username +
                "*%20dari%20kelas%20*" +
                userClass +
                "*%0A%0A*" +
                about +
                "*";

            window.open(url);
        }
        function toggleMenu() {
            const element = document.getElementById("toggle-content");
            element.classList.toggle("hidden");
        }

            const menabung = document.getElementById("menabung");
            const pembukaan = document.getElementById("pembukaan");
            const pengamblan = document.getElementById("pengambilan");
            const penutupan = document.getElementById("penutupan");
            const openMenabung = document.getElementById("openMenabung");
            const openPembukaan = document.getElementById("openPembukaan");
            const openPengamblan = document.getElementById("openPengamblan");
            const openPenutupan = document.getElementById("openPenutupan");
            const closeModalBtn = document.getElementById("closeModalBtn");

            menabung.classList.add("hidden");
            pembukaan.classList.add("hidden");
            pengambilan.classList.add("hidden");
            penutupan.classList.add("hidden");



            openMenabung.addEventListener("click", () =>{
            menabung.classList.remove("hidden")
            });
            openPembukaan.addEventListener("click", () =>{
            pembukaan.classList.remove("hidden")
            });
            openPengamblan.addEventListener("click", () =>{
            pengamblan.classList.remove("hidden")
            });
            openPenutupan.addEventListener("click", () =>{
            penutupan.classList.remove("hidden")
            });

            closeModalBtn.addEventListener("click", () => {
                 menabung.classList.add("hidden");
            });

            function closemodal(){
                menabung.classList.add("hidden");
                pembukaan.classList.add("hidden");
                pengamblan.classList.add("hidden");
                penutupan.classList.add("hidden");
            };


    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
            once: true,
        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
      <script>
        gsap.from('.gambar', { duration: 0.8, delay: 0.5, y: -100, opacity: 0, ease: 'power3.out' });
        gsap.from('nav', { duration: 1, delay: 0.3, y: -100, opacity: 0, ease: 'bounce' });
        gsap.from('.logo', { duration: 0.8, delay: 0.3, y: -100, opacity: 0, ease: 'bounce' });

      </script>
     <script>
            feather.replace();
      </script>

</body>
</html>
