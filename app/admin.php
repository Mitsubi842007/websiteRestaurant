<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="admin.css">    
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

    
</body>

</html>