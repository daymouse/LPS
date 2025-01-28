<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <nav class=" border-b-2 border-blue-500 h-20 flex justify-between px-[10%] py-0 items-center w-full fixed top-0 left-0 z-20 bg-white ">
        <div class="text-2xl">LKM Siswa Mitra Abadi</div>
        <div class="flex gap-4">
            <a class="navbar-brand" href="#">Home</a>
            <a class="navbar-brand" href="#">Layanan</a>
            <a class="navbar-brand" href="#">Contact</a>
        </div>
    </nav>

    <div class="h-screen flex justify-between items-center px-[10%] py-0 flex-wrap bg-[#1A4D2E]"> <!-- Add margin-top to offset fixed navbar -->
        <div class="text-left flex flex-col gap-2">
            <h1 class="text-3xl font-bold">Layanan Perbangkan Syariah</h1>
            <h1 class="text-3xl font-bold">SMK N 1 Bantul</h1>
            <p class="text-2.3xl">"Mempersiapkan bank mini sebagai pelopor ekonomi syariah di sekolah"</p>
            <button class="border-2 border-blue-500 p-2 text-blue-500 hover:bg-blue-500 hover:text-white w-20 rounded-xl">contact</button>
        </div>
        <div class=" rounded-full  bg-green-400">
            <img src="{{ asset('asset/home.png') }}" alt="" class="">
        </div>
    </div>

    <div class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/tentang.png') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-white p-8 flex flex-col items-center justify-center h-full">
            <div class="w-[70%] text-center">
                <h1 class="text-4xl font-bold mb-20">Tentang Kami</h1>
                <p class="text-2xl">
                    Bank Mini LKM Mitra Siswa Abadi didirikan pada bulan April tahun 2008 dengan tujuan untuk melayani tabungan siswa SMK Negeri 1 Bantul, serta sebagai laboratorium pembelajaran perbankan syariah.
                </p>
                <p  class="text-2xl">
                    Visi: Menciptakan bank mini sebagai pelopor ekonomi syariah di sekolah.
                </p>
                <p  class="text-2xl">
                    Misi: Melayani sepenuh hati dengan menerapkan prinsip syariah dalam praktik pembelajaran perbankan.
                </p>
            </div>
            <button class="border-2 border-blue-500 p-2 text-blue-500 hover:bg-blue-500 hover:text-white w-20 rounded-xl">contact</button>
        </div>
    </div>

    <div class="w-full h-screen text-center flex flex-col justify-center items-center bg-[#1A4D2E]">
        <h1 class="text-4xl font-bold">Layanan</h1>
        <p class="text-2xl mt-10">
            Kami menyediakan layanan perbankan syariah yang aman dan terpercaya, untuk siswa SMK Negeri 1 Bantul
        </p>
        <div class="flex justify-center mt-8 gap-4 flex-wrap">
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Tabungan syariah.png') }}" alt="Gambar Transfer" class="w-14">
                </div>
                <span class="text-8 font-bold m-4">Tabungan Syariah</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Pengambilan tabungan.png') }}" alt="Gambar Transfer" class="w-14">
                </div>
                <span class="text-8 font-bold m-4">Pengambilan Tabungan</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/pembukaan tabungan.png') }}" alt="Gambar Transfer" class="w-14">
                </div>
                <span class="text-8 font-bold m-4">Pembukaan Tabungan</span>
            </div>
            <div class="w-40 h-[170px] border-2 flex flex-col items-center pt-3 rounded-xl bg-[#34E8FC] shadow-xl">
                <div class="w-20 h-20 rounded-full bg-white flex justify-center items-center">
                    <img src="{{ asset('asset/Penutupan tabungan.png') }}" alt="Gambar Transfer" class="w-14">
                </div>
                <span class="text-8 font-bold m-4">Penutupan Tabungan</span>
            </div>
        </div>
        <button class="border-2 border-blue-500 p-2 text-blue-500 hover:bg-blue-500 hover:text-white w-20 mt-8 rounded-xl">contact</button>
    </div>
    <div class="w-full h-screen text-center flex justify-between items-center px-[10%] py-0 gap-6 bg-[#1A4D2E]">
        <div class="border-2 pl-16 pr-16 pb-8 pt-4 rounded-xl bg-slate-100">
            <form onsubmit="kirimpesan(event)" class="flex flex-col ">
                <h1 class="text-4xl font-bold mt-8">Kirim Pesan</h1>
                <div class="flex flex-col gap-4 mt-8 text-left">
                    <span class ="text-2xl mt-10">Name</span>
                    <input type="text" name="nama" id="name" required class="w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                <div class="flex flex-col gap-4 mt-4 text-left">
                    <span class ="text-2xl mt-2">Class</span>
                    <input type="text" name="kelas" id="kelas" required class="w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                </div>
                <div class="flex flex-col gap-4 mt-4 text-left">
                    <span class ="text-2xl mt-2">Massage</span>
                    <textarea id="about" name="about" rows="3" required class="w-80 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                </div>
                <button type="submit" class="border-2 border-blue-500 p-2 text mt-8 rounded-xl">Submit</button>
            </form>
        </div>
        <div class="border-2 w-[100%] h-[80%] rounded-xl">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.049332486135!2d110.35305437550225!3d-7.88990797848821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00889ad8f84d%3A0x2e0009ca7815eaf0!2sSMK%20Negeri%201%20Bantul!5e0!3m2!1sid!2sid!4v1732127607824!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-xl "></iframe>
        </div>
    </div>
    <div class="h-40 flex items-start py-[10%]">

    </div>


    <script>
        function kirimpesan(event) {
            // Mencegah submit form
            event.preventDefault();

            // Mengambil nilai dari input
            const username = document.getElementById("name").value;
            const userClass = document.getElementById("kelas").value;
            const about = document.getElementById("about").value;

            // Membuat URL WhatsApp
            const url = "https://api.whatsapp.com/send?phone=6285643426316&text=Halo%20saya%20*" +
                username +
                "*%20dari%20kelas%20*" +
                userClass +
                "*%0A%0A*" +
                about +
                "*";

            // Membuka URL di tab baru
            window.open(url);
        }
    </script>

</body>
</html>
