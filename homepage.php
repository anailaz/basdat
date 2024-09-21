<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Manajemen Museum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            background-color: #eae4dd; /* Light Gray */
            color: #295f98; /* Dark Blue */
        }

        header, #about, #likes, #contact, #hero, #reserve, #collection {
            background-color: #eae4dd;
            color: #295f98;
            transition: background-color 0.5s ease-in-out;
            border-bottom: 2px solid #f0f0eb;
        }

        /* Style hero */
        #hero {
            position: relative; /* Diperlukan untuk positioning anak-anak jika diperlukan */
            display: flex;
            flex-direction: row; /* Atur arah flex ke horizontal */
            justify-content: space-between; /* Ruang antara teks dan gambar */
            align-items: center; /* Vertikal center */
            padding: 0; /* Hapus padding jika tidak diperlukan */
            background-color: #eae4dd; /* Warna latar belakang */
            color: #295f98;
            height: 100vh; /* Mengisi seluruh tinggi viewport */
            overflow: hidden;
            font-family: Bookman Old Style, serif;
        }

        header {
            position: sticky;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            top: 0;
            z-index: 100;
            background-color: #295f98;
            color: #CDC2A5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 24px;
            color: #EAE4DD;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #EAE4DD;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #e1d7c6;
        }

        .intro-text h2 {
            font-family: "Bookman Old Style", serif;
            font-size: 64px; 
            margin-bottom: 20px;
            color: #295f98;
            text-shadow:
                2px 2px 0 #CDC2A5,
                -2px 2px 0 #CDC2A5,
                2px -2px 0 #CDC2A5,
                -2px -2px 0 #CDC2A5;
        }

        .intro-text p {
            font-family: "Bookman Old Style", serif;
            font-size: 40px;
            margin-bottom: 30px;
            color: #295f98;
        }

        .intro-text button {
            font-family: "Bookman Old Style", serif;
            padding: 15px 30px;
            font-size: 20px;
            background-color: #CDC2A5; /* Light Beige */
            color: #295f98; /* Dark Blue */
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .intro-text button:hover {
            background-color: #b7a88e;
        }

        .intro-text button:hover {
            background-color: #b7a88e;
        }
        .hero-image {
            position: relative; /* Ubah dari absolute ke relative */
            width: 50%; /* Ambil 50% lebar container */
            height: 100%; /* Mengisi seluruh tinggi container */
            overflow: hidden;
            transition: opacity 1s ease-in-out;
            opacity: 0.85; /* Sesuaikan opasitas jika diperlukan */
        }

        .hero-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        .hero-image img.show {
            display: block;
            opacity: 1;
        }

        .hero-image img.hide {
            opacity: 0;
        }

        section {
            padding: 50px 20px;
            text-align: center;
            background-color: #eae4dd;
            transition: background-color 0.5s ease, opacity 0.5s ease;
            opacity: 0.9;
        }

        section.visible {
            opacity: 1;
        }

        /* Mengatur gaya default untuk link di dalam h2 */
        #about h2 a, #reserve h2 a, #likes h2 a, #collection h2 a, #contact h2 a {
            text-decoration: none;
            color: #295f98;
            font-family: bookman Old Style;
            transition: color 0.3s ease;
            font-size: 36px;
        }

        /* Gaya saat link di-hover */
        #about h2 a:hover, #reserve h2 a:hover, #likes h2 a:hover, #collection h2 a:hover, #contact h2 a:hover {
            color: #CDC2A5;
            text-decoration: none;
        }

        #about p, #reserve p, #likes p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            font-family : bookman old style;
            color : #295f98;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #295f98;
            color: white;
        }

        /* Style for "collection" section */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .gallery img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Styling for contact section */
        #contact {
            padding: 50px 20px;
        }

        .contact-person {
            display: inline-block;
            width: 200px;
            margin: 20px;
            text-align: center;
        }

        .contact-person img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-person img:hover {
            transform: scale(1.1);
        }

        .contact-person h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #295f98;
        }

        .contact-person p {
            font-size: 14px;
            color: #295f98;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #eae4dd;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            max-width: 400px;
            margin: 0 auto;
        }

        .modal-content h3 {
            color: #295f98;
        }

        .modal-content p {
            color: #295f98;
            font-size: 16px;
            line-height: 1.5;
        }

        .close-btn {
            color: #295f98;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #e1d7c6;
        }

        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            width: 40px; /* Adjust the width */
            height: 40px; /* Adjust the height */
            padding: 0; /* Remove padding */
            font-size: 18px;
            background-color: #295f98;
            color: #EAE4DD;
            border: none;
            cursor: pointer;
            border-radius: 50%; /* Make it circular */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: opacity 0.3s ease;
            display: flex; /* Use flexbox to center the content */
            justify-content: center;
            align-items: center;
        }

        #back-to-top:hover {
            background-color: #b7a88e;
        }
            </style>
</head>
<body>

    <header>
        <h1>Sistem Informasi Manajemen Museum</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/collection">Collection</a></li>
                <li><a href="/reserve">Reserve</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <div class="hero-image">
            <img src="image/homepage1.jpeg" class="show" alt="Homepage 1">
            <img src="image/homepage2.jpeg" class="hide" alt="Homepage 2">
        </div>
        <div class="intro-text">
            <h2>Selamat Datang di Museum</h2>
            <p>Sistem Informasi Manajemen</p>
            <button onclick="scrollToSection()">Explore More</button>
        </div>
    </section>

    <section id="about">
        <h2><a href="/about">About Us</a></h2>
        <p>Museum kami berdedikasi untuk menginformasikan sejarah dan seni, kami menyediakan pengalaman mendalam bagi semua pengunjung. Kami menawarkan berbagai pameran yang menarik, mulai dari seni klasik hingga kontemporer, yang menginspirasi dan mendidik. Tim kami terdiri dari profesional berpengalaman yang berdedikasi untuk melestarikan dan memamerkan karya seni yang luar biasa.</p>
    </section>

    <section id="collection">
        <h2><a href="/collection">Collection for This Season!</a></h2>
        <div class="gallery">
            <img src="image/collection1.jpeg" alt="collection 1">
            <img src="image/collection1.jpeg" alt="collection 2">
            <img src="image/collection1.jpeg" alt="collection 3">
            <img src="image/collection1.jpeg" alt="collection 4">
        </div>
    </section>

    <section id="reserve">
        <h2><a href="/login">Reserve Here</a></h2>
        <p>Kunjungan ke museum kami lebih dari sekadar melihat pameran—ini adalah kesempatan untuk benar-benar merasakan sejarah, seni, dan budaya. Setiap galeri menawarkan pengalaman interaktif yang akan memperkaya pengetahuan dan memperluas pandangan Anda. Jangan hanya mendengar cerita; datang dan alami sendiri keajaibannya. Kami menantikan kunjungan Anda!</p>
    </section>

    <section id="contact">
        <h2><a href="/contact">Contact Us</a></h2>
        <div class="contact-person" onclick="openModal(0)">
            <img src="image/cp1.jpeg" alt="Contact Person 1">
            <h3>Meri Agustina</h3>
            <p>164221025</p>
        </div>
        <div class="contact-person" onclick="openModal(1)">
            <img src="image/cp1.jpeg" alt="Contact Person 2">
            <h3>Fauziah Al Hanief</h3>
            <p>164221055</p>
        </div>
        <div class="contact-person" onclick="openModal(2)">
            <img src="image/cp1.jpeg" alt="Contact Person 3">
            <h3>Adam Cendekiawan</h3>
            <p>164221093</p>
        </div>
        <div class="contact-person" onclick="openModal(3)">
            <img src="image/cp1.jpeg" alt="Contact Person 4">
            <h3>Amira Naila Zanira</h3>
            <p>1642210100</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Museum. All rights reserved.</p>
    </footer>

    <!-- Modal for displaying contact person details -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3 id="modal-name"></h3>
            <p id="modal-bio"></p>
        </div>
    </div>

    <button id="back-to-top" onclick="scrollToTop()">&#8679;</button>

    <script>

        function scrollToSection() {
            const aboutSection = document.getElementById('about');
            aboutSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Background image slideshow effect
        const images = document.querySelectorAll('.hero-image img');
        let currentImage = 0;

        setInterval(() => {
            images[currentImage].classList.remove('show');
            images[currentImage].classList.add('hide');

            currentImage = (currentImage + 1) % images.length;

            images[currentImage].classList.remove('hide');
            images[currentImage].classList.add('show');
        }, 4000);

        // Modal data for contact persons
        const contactData = [
            {
                name: "Meri Agustina",
                bio: "Biodata Contact Person 1."
            },
            {
                name: "Fauziah Al Hanief",
                bio: "Biodata Contact Person 2."
            },
            {
                name: "Adam Cendekiawan",
                bio: "Biodata Contact Person 3."
            },
            {
                name: "Amira Naila Zanira",
                bio: "Biodata Contact Person 4."
            }
        ];

        // Function to open modal with the selected contact person's data
        function openModal(index) {
            const modal = document.getElementById('modal');
            const modalName = document.getElementById('modal-name');
            const modalBio = document.getElementById('modal-bio');

            modalName.textContent = contactData[index].name;
            modalBio.textContent = contactData[index].bio;

            modal.style.display = "flex";
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('modal');
            modal.style.display = "none";
        }

        // Fungsi untuk menggulir kembali ke atas
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Tampilkan tombol back-to-top saat pengguna menggulir ke bawah
        window.onscroll = function() {
            const backToTopButton = document.getElementById('back-to-top');
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };
    </script>

</body>
</html>
