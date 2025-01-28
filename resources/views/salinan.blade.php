<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>lkmSiswaMitraAbadi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        nav {
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgb(138, 190, 4);
            z-index: 1000;
            padding: 10px 0;
        }
        body {
            margin-top: 0px;
        }
        .content {
            padding-top: 0px;
        }
    </style>
</head>
<body class="bg-[#1A4D2E] font-inter">
    <nav class="flex px-[5%] items-center justify-between shadow-2xl fixed">
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

    <div id="home" class="h-screen flex items-center justify-between px-[5%] py-0 bg-[#1A4D2E] md:px-[7%] flex-col md:flex-row">
        <div class="flex flex-col items-center ">
            <img src="{{ asset('asset/logo.png') }}" class="w-[10rem] lg:w-[14rem]">
            <div class="text-center wrap flex flex-col items-center gap-2 mt-4 md:text-left md:items-start lg:w-[30rem]">
                <h1 class="text-2xl lg:text-4xl font-semibold text-white font-inter">Layanan Perbangkan Syariah</h1>
                <h1 class="text-2xl font-bold lg:text-5xl text-[rgb(232,235,72)] font-inter italic">SMK N 1 BANTUL</h1>
                <p class="text-1xl lg:text-2xl text-white font-inter">"Mempersiapkan bank mini sebagai pelopor ekonomi syariah di sekolah"</p>
                <button onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 text-limeGreen hover:bg-limeGreen hover:text-Green w-[20rem] rounded-xl mt-8 hover:shadow-lg ">
                    Contact
                </button>
            </div>
        </div>
        <div class="w-[20rem] h-[20rem] rounded-full bg-limeGreen overflow-hidden lg:w-[25rem] lg:h-[25rem] mb-12 shadow-2xl ">
            <img src="{{ asset('asset/home.png') }}" alt="Logo" class="object-cover -translate-y-10">
        </div>
     </div>
     <div  id="toggle-content" class="flex-row bottom-0 fixed w-full bg-limeGreen z-20 hidden sm:hidden">
        <div class="flex items-center px-[5%] w-full
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"">
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
                <h1 class="text-4xl font-bold mb-20">Tentang Kami</h1>
                <p class="text-1xl md:text-2xl">
                    Bank Mini LKM Mitra Siswa Abadi didirikan pada bulan April tahun 2008 dengan tujuan untuk melayani tabungan siswa SMK Negeri 1 Bantul, serta sebagai laboratorium pembelajaran perbankan syariah.
                </p>
                <p  class="text-1xl md:text-2xl">
                    Visi: Menciptakan bank mini sebagai pelopor ekonomi syariah di sekolah.
                </p>
                <p  class="text-1xl md:text-2xl">
                    Misi: Melayani sepenuh hati dengan menerapkan prinsip syariah dalam praktik pembelajaran perbankan.
                </p>
            </div>
            <button onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 w-[20rem] text-limeGreen hover:bg-limeGreen hover:text-white rounded-xl mt-8 hover:shadow-lg">
                Contact
            </button>
        </div>
    </div>
    <div id="layanan" class="w-full h-[40rem] text-center flex flex-col justify-center items-center bg-[#1A4D2E]">
        <h1 class="text-4xl font-bold  text-white">Layanan</h1>
        <p class="text-1xl mt-10 px-[5%] md:text-2xl  text-white">
            Kami menyediakan layanan perbankan syariah yang aman dan terpercaya, untuk siswa SMK Negeri 1 Bantul
        </p>
        <div class="flex justify-center mt-8 gap-4 flex-wrap">
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl  border-limeGreen hover:shadow-lg hover:shadow-limeGreen hover:-translate-y-2">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Tabungan syariah.png') }}" alt="Gambar Transfer" class="w-14 hover:scale-150">
                </div>
                <span class="text-8 font-bold m-4">Tabungan Syariah</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl  border-limeGreen hover:shadow-lg hover:shadow-limeGreen hover:-translate-y-2">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Pengambilan tabungan.png') }}" alt="Gambar Transfer" class="w-14 hover:scale-150">
                </div>
                <span class="text-8 font-bold m-4">Pengambilan Tabungan</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl  border-limeGreen hover:shadow-lg hover:shadow-limeGreen hover:-translate-y-2">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/pembukaan tabungan.png') }}" alt="Gambar Transfer" class="w-14 hover:scale-150">
                </div>
                <span class="text-8 font-bold m-4">Pembukaan Tabungan</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl  border-limeGreen hover:shadow-lg hover:shadow-limeGreen hover:-translate-y-2">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Penutupan tabungan.png') }}" alt="Gambar Transfer" class="w-14 hover:scale-150">
                </div>
                <span class="text-8 font-bold m-4">Penutupan Tabungan</span>
            </div>
        </div>
        <button onclick="window.location.href='#contact';" class="border-2 border-limeGreen p-2 w-[20rem] text-limeGreen hover:bg-limeGreen hover:text-Green rounded-xl mt-8 hover:shadow-lg ">
            Contact
        </button>

    </div>

    <div id="contact" class="w-full h-[40rem] text-center flex justify-between items-center px-[5%] py-0 gap-2 bg-[#1A4D2E]">
        <section class="w-full">
            <div class="container mx-auto flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-1/2 border-2 border-limeGreen p-6 rounded-xl  bg-white">
                    <h2 class="text-4xl font-semibold mb-6 text-center">Kirim Pesan</h2>
                    <form onsubmit="kirimpesan(event)" class="flex flex-col gap-4">
                        <input type="text" name="nama" id="name" placeholder="Your Name" required class="w-full p-3 border-2  border-limeGreen rounded-xl">
                        <input type="text" name="kelas" id="kelas" placeholder="Your Class" required class="w-full p-3 border-2  border-limeGreen rounded-xl">
                        <textarea id="about" name="about" placeholder="Your Message" rows="4" required class="w-full p-3 border-2 border-limeGreen rounded-xl"></textarea>
                        <button type="submit" class="border-2 border-limeGreen text-limeGreen hover:bg-limeGreen hover:text-white px-6 py-3 rounded-full text-lg transition duration-300">Submit</button>
                    </form>
                </div>
                <div class="w-full lg:w-1/2 border-2  border-limeGreen rounded-xl overflow-hidden">
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

    </script>

</body>
</html>
