<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Museum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eae4dd; /* Light Gray */
            color: #295f98; /* Dark Blue */
            margin: 0;
            padding: 0;
        }

        header {
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

        .container {
            font-family: bookman Old Style;
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .collection-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .collection-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .collection-item:hover {
            transform: scale(1.05);
        }

        .collection-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .collection-item h3 {
            padding: 15px;
            margin: 0;
            background-color: #295f98;
            color: white;
            text-align: center;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto; /* 10% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            position: relative;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        .modal-content h2 {
            margin-top: 0;
            color: #295f98;
        }

        .modal-content p {
            font-size: 1em;
            color: #333;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #295f98;
            color: white;
        }

        /* Responsive Modal */
        @media (max-width: 600px) {
            .modal-content {
                width: 95%;
            }
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
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2 style="text-align: center; color: #295f98;">Koleksi Museum</h2>
        <div class="collection-grid">
            <!-- Koleksi 1 -->
            <div class="collection-item" onclick="openModal('modal1')">
                <img src="image/collection1.jpeg" alt="Koleksi 1">
                <h3>Nama Koleksi 1</h3>
            </div>

            <!-- Koleksi 2 -->
            <div class="collection-item" onclick="openModal('modal2')">
                <img src="image/collection1.jpeg" alt="Koleksi 2">
                <h3>Nama Koleksi 2</h3>
            </div>

            <!-- Koleksi 3 -->
            <div class="collection-item" onclick="openModal('modal3')">
                <img src="image/collection1.jpeg" alt="Koleksi 3">
                <h3>Nama Koleksi 3</h3>
            </div>

            <!-- Tambah Koleksi Lainnya -->
            <!-- Koleksi 4 -->
            <div class="collection-item" onclick="openModal('modal4')">
                <img src="image/collection1.jpeg" alt="Koleksi 4">
                <h3>Nama Koleksi 4</h3>
            </div>
            <!-- Koleksi 5 -->
            <div class="collection-item" onclick="openModal('modal5')">
                <img src="image/collection1.jpeg" alt="Koleksi 5">
                <h3>Nama Koleksi 5</h3>
            </div>
            <!-- Koleksi 6 -->
            <div class="collection-item" onclick="openModal('modal6')">
                <img src="image/collection1.jpeg" alt="Koleksi 6">
                <h3>Nama Koleksi 6</h3>
            </div>

            <!-- Koleksi 7 -->
            <div class="collection-item" onclick="openModal('modal7')">
                <img src="image/collection1.jpeg" alt="Koleksi 7">
                <h3>Nama Koleksi 7</h3>
            </div>

            <!-- Koleksi 8 -->
            <div class="collection-item" onclick="openModal('modal8')">
                <img src="image/collection1.jpeg" alt="Koleksi 8">
                <h3>Nama Koleksi 8</h3>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <h2>Nama Koleksi 1</h2>
            <p>Deskripsi lengkap tentang koleksi 1. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <h2>Nama Koleksi 2</h2>
            <p>Deskripsi lengkap tentang koleksi 2. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
            <h2>Nama Koleksi 3</h2>
            <p>Deskripsi lengkap tentang koleksi 3. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <!-- Modal 4 -->
    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <h2>Nama Koleksi 4</h2>
            <p>Deskripsi lengkap tentang koleksi 4. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <!-- Modal 5 -->
    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <h2>Nama Koleksi 5</h2>
            <p>Deskripsi lengkap tentang koleksi 5. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <!-- Modal 6 -->
    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <h2>Nama Koleksi 6</h2>
            <p>Deskripsi lengkap tentang koleksi 6. Informasi sejarah, asal-usul, dan detail menarik lainnya mengenai koleksi ini.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Museum</p>
    </footer>

    <script>
        // Fungsi untuk membuka modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Fungsi untuk menutup modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Menutup modal jika pengguna mengklik di luar modal
        window.onclick = function(event) {
            const modals = document.getElementsByClassName('modal');
            for (let i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
