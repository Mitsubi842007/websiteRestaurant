<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restaurant.css">
    <link rel="stylesheet" href="admin-panel.css">
</head>

<body>
    <div class="admin-header">
        <div>
            <h1>🔧 Admin Panel</h1>
            <p style="margin:5px 0;color:#666">Beheer de menu items</p>
        </div>
        <button class="logout-btn" onclick="logout()">🚪 Uitloggen</button>
    </div>

    <div class="add-item-form">
        <h2 style="margin-top:0">Nieuw Item Toevoegen</h2>
        <div class="form-group">
            <label>Gerecht Naam *</label>
            <input type="text" id="itemName" placeholder="bijv. Sushi Platter" required>
        </div>
        <div class="form-group">
            <label>Beschrijving *</label>
            <textarea id="itemDesc" placeholder="bijv. Assortiment verse sushi" required></textarea>
        </div>
        <div class="form-group">
            <label>Prijs (€) *</label>
            <input type="number" id="itemPrice" placeholder="15.00" step="0.01" min="0" required>
        </div>
        <div class="form-buttons">
            <button class="btn-add" onclick="addNewItem()">✚ Toevoegen</button>
            <button class="btn-reset" type="reset"
                onclick="document.querySelectorAll('input,textarea').forEach(e=>e.value='')">Wissen</button>
        </div>
    </div>

    <h2 style="margin-bottom:5px">Menu Items</h2>
    <p id="itemCount" style="color:#666;margin:0 0 20px 0">0 items</p>
    <div id="menuItemsContainer" class="menu-items-list">
        <div style="text-align:center;padding:40px 20px;color:#999;grid-column:1/-1">Geen items gevonden</div>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <h3>Item Bewerken</h3>
            <div class="form-group">
                <label>Naam</label>
                <input type="text" id="editName">
            </div>
            <div class="form-group">
                <label>Beschrijving</label>
                <textarea id="editDesc"></textarea>
            </div>
            <div class="form-group">
                <label>Prijs (€)</label>
                <input type="number" id="editPrice" step="0.01" min="0">
            </div>
            <div style="display:flex;gap:10px;margin-top:20px">
                <button style="background:#27ae60;flex:1" onclick="saveEdit()">Opslaan</button>
                <button style="background:#95a5a6;flex:1" onclick="closeEditModal()">Annuleren</button>
            </div>
        </div>
    </div>

    <script src="restaurant.js"></script>
    <script>
        let editingId = null;

        function checkAdminAccess() {
            if (!localStorage.getItem('adminLoggedIn')) window.location.href = 'loginpage.html';
        }

        function logout() {
            localStorage.removeItem('adminLoggedIn');
            window.location.href = 'homepage.html';
        }

        function renderMenuItems() {
            const c = document.getElementById('menuItemsContainer');
            if (menuItems.length === 0) {
                c.innerHTML = '<div style="text-align:center;padding:40px 20px;color:#999;grid-column:1/-1">Geen items gevonden</div>';
                document.getElementById('itemCount').textContent = '0 items';
                return;
            }
            c.innerHTML = menuItems.map(i => `<div class="menu-card"><h3>${i.name}</h3><p>${i.description}</p><span class="price">€${i.price.toFixed(2)}</span><div class="card-buttons"><button class="btn-edit" onclick="openEditModal(${i.id})">✏️ Bewerk</button><button class="btn-delete" onclick="deleteItem(${i.id})">🗑️ Verw</button></div></div>`).join('');
            document.getElementById('itemCount').textContent = menuItems.length + (menuItems.length === 1 ? ' item' : ' items');
        }

        function addNewItem() {
            const n = document.getElementById('itemName').value.trim();
            const d = document.getElementById('itemDesc').value.trim();
            const p = document.getElementById('itemPrice').value.trim();
            if (!n || !d || !p) { alert('Vul alle velden in!'); return; }
            if (isNaN(p) || p < 0) { alert('Geldige prijs!'); return; }
            addMenuItem(n, d, parseFloat(p));
            document.querySelectorAll('#itemName,#itemDesc,#itemPrice').forEach(e => e.value = '');
            renderMenuItems();
            alert('Toegevoegd!');
        }

        function openEditModal(id) {
            const i = menuItems.find(m => m.id === id);
            editingId = id;
            document.getElementById('editName').value = i.name;
            document.getElementById('editDesc').value = i.description;
            document.getElementById('editPrice').value = i.price;
            document.getElementById('editModal').classList.add('active');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.remove('active');
            editingId = null;
        }

        function saveEdit() {
            const n = document.getElementById('editName').value.trim();
            const d = document.getElementById('editDesc').value.trim();
            const p = document.getElementById('editPrice').value.trim();
            if (!n || !d || !p) { alert('Vul alles in!'); return; }
            editMenuItem(editingId, n, d, parseFloat(p));
            closeEditModal();
            renderMenuItems();
            alert('Bijgewerkt!');
        }

        function deleteItem(id) {
            if (confirm('Verwijderen?')) { removeMenuItem(id); renderMenuItems(); alert('Weg!'); }
        }

        document.addEventListener('DOMContentLoaded', () => {
            checkAdminAccess();
            initMenuItems();
            renderMenuItems();
        });

        document.getElementById('editModal').addEventListener('click', e => {
            if (e.target.id === 'editModal') closeEditModal();
        });
    </script>
</body>

</html>