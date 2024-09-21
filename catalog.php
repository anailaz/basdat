<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Catalog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #EAE4DD;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #295F98;
            text-align: center;
            margin: 20px 0;
        }
        .catalog-section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 1200px;
        }
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .catalog-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            position: relative;
        }
        .catalog-item:hover {
            transform: translateY(-5px);
        }
        .catalog-item-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        .catalog-item-title {
            font-size: 1.2rem;
            margin: 10px 0;
            color: #295F98;
        }
        .catalog-item-desc {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }
        .catalog-item-button {
            background-color: #295F98;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .catalog-item-button:hover {
            background-color: #1f4877;
        }
        .catalog-item-remove {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px 8px;
            cursor: pointer;
        }
        .catalog-item-remove:hover {
            background-color: darkred;
        }
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .catalog-section {
                padding: 15px;
            }
            .catalog-item-img {
                height: 150px;
            }
        }
    </style>
</head>
<body>

    <!-- Content -->
    <div class="content" id="contentSection">
        <h1>Museum Catalog</h1>

        <div class="catalog-section">
            <h2 class="mb-4">Museum Artifacts</h2>
            <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addCatalogModal">Add New Artifact</button>
            <div class="catalog-grid" id="catalogGrid">
                <!-- Item Katalog 1 -->
                <div class="catalog-item" id="catalogItem1">
                    <img src="https://via.placeholder.com/250x200" alt="Artifact 1" class="catalog-item-img">
                    <h3 class="catalog-item-title">Artifact Name 1</h3>
                    <p class="catalog-item-desc">Short description of Artifact 1. This artifact was discovered in the ancient ruins of...</p>
                    <button class="catalog-item-button" onclick="showItemDetails(1)">View Details</button>
                    <button class="catalog-item-remove" onclick="removeItem('catalogItem1')">&times;</button>
                </div>
                <!-- Item Katalog 2 -->
                <div class="catalog-item" id="catalogItem2">
                    <img src="https://via.placeholder.com/250x200" alt="Artifact 2" class="catalog-item-img">
                    <h3 class="catalog-item-title">Artifact Name 2</h3>
                    <p class="catalog-item-desc">Short description of Artifact 2. This artifact dates back to the medieval period and was found in...</p>
                    <button class="catalog-item-button" onclick="showItemDetails(2)">View Details</button>
                    <button class="catalog-item-remove" onclick="removeItem('catalogItem2')">&times;</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Item Details -->
    <div class="modal fade" id="itemDetailsModal" tabindex="-1" aria-labelledby="itemDetailsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="itemDetailsModalLabel">Item Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p id="itemDetailsContent">Detail informasi tentang item akan ditampilkan di sini.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Adding New Catalog -->
    <div class="modal fade" id="addCatalogModal" tabindex="-1" aria-labelledby="addCatalogModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCatalogModalLabel">Add New Artifact</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addCatalogForm">
                <div class="mb-3">
                    <label for="artifactTitle" class="form-label">Artifact Title</label>
                    <input type="text" class="form-control" id="artifactTitle" required>
                </div>
                <div class="mb-3">
                    <label for="artifactDesc" class="form-label">Artifact Description</label>
                    <textarea class="form-control" id="artifactDesc" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="artifactImage" class="form-label">Artifact Image URL</label>
                    <input type="url" class="form-control" id="artifactImage" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Artifact</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        function showItemDetails(itemId) {
            var itemDetails = {
                1: {
                    title: "Artifact Name 1",
                    description: "Detailed description of Artifact 1. This artifact was discovered in the ancient ruins of...",
                    image: "https://via.placeholder.com/400x300"
                },
                2: {
                    title: "Artifact Name 2",
                    description: "Detailed description of Artifact 2. This artifact dates back to the medieval period and was found in...",
                    image: "https://via.placeholder.com/400x300"
                }
            };

            var details = itemDetails[itemId];
            if(details){
                document.getElementById('itemDetailsModalLabel').innerText = details.title;
                document.getElementById('itemDetailsContent').innerHTML = `
                    <img src="${details.image}" alt="${details.title}" class="img-fluid mb-3">
                    <p>${details.description}</p>
                `;
                var modal = new bootstrap.Modal(document.getElementById('itemDetailsModal'));
                modal.show();
            } else {
                alert("Detail untuk item ini tidak tersedia.");
            }
        }

        // Fungsi untuk menghapus item katalog
        function removeItem(itemId) {
            var item = document.getElementById(itemId);
            if (item) {
                item.remove();
            } else {
                alert("Item tidak ditemukan.");
            }
        }

        // Fungsi untuk menambahkan item katalog baru
        document.getElementById('addCatalogForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var title = document.getElementById('artifactTitle').value;
            var desc = document.getElementById('artifactDesc').value;
            var imageUrl = document.getElementById('artifactImage').value;

            var newItemId = 'catalogItem' + (document.getElementsByClassName('catalog-item').length + 1);

            var newItemHTML = `
                <div class="catalog-item" id="${newItemId}">
                    <img src="${imageUrl}" alt="${title}" class="catalog-item-img">
                    <h3 class="catalog-item-title">${title}</h3>
                    <p class="catalog-item-desc">${desc}</p>
                    <button class="catalog-item-button" onclick="showItemDetails(${document.getElementsByClassName('catalog-item').length + 1})">View Details</button>
                    <button class="catalog-item-remove" onclick="removeItem('${newItemId}')">&times;</button>
                </div>
            `;

            document.getElementById('catalogGrid').insertAdjacentHTML('beforeend', newItemHTML);

            // Reset form
            document.getElementById('addCatalogForm').reset();
            var modal = bootstrap.Modal.getInstance(document.getElementById('addCatalogModal'));
            modal.hide();
        });
    </script>

</body>
</html>
