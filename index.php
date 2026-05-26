<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panitia Kurban Ponpes Abu Hurairah Mataram</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1b5e20;
            --secondary-color: #c5a059;
            --bg-color: #f4f7f6;
            --text-color: #333;
            --card-bg: #ffffff;
            --danger-color: #d32f2f;
            --shadow: 0 4px 6px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Roboto', sans-serif; background-color: var(--bg-color); color: var(--text-color); line-height: 1.6; padding-bottom: 50px; }

        /* --- HEADER --- */
        header {
            background: linear-gradient(135deg, var(--primary-color), #2e7d32);
            color: white; padding: 40px 20px; text-align: center; border-bottom: 5px solid var(--secondary-color); position: relative;
        }
        .iso-badge {
            position: absolute; top: 20px; right: 20px; background: white; color: var(--primary-color);
            padding: 5px 15px; border-radius: 4px; font-weight: bold; font-size: 0.8rem; box-shadow: 0 2px 5px rgba(0,0,0,0.2); border: 1px solid var(--secondary-color);
        }
        .kop-lemabaga { font-family: 'Amiri', serif; font-size: 2rem; font-weight: 700; margin-bottom: 10px; letter-spacing: 1px; text-transform: uppercase; }
        .panitia-title { font-size: 1.5rem; font-weight: 500; margin-bottom: 15px; color: #e8f5e9; }
        .date-container { display: flex; justify-content: center; gap: 20px; font-size: 1rem; opacity: 0.9; font-style: italic; }
        .date-item { background: rgba(255,255,255,0.1); padding: 5px 15px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.3); }

        /* --- PENANGGUNG JAWAB --- */
        .section-title { text-align: center; margin: 40px 0 20px; color: var(--primary-color); font-family: 'Amiri', serif; font-size: 1.8rem; position: relative; }
        .section-title::after { content: ''; display: block; width: 60px; height: 3px; background: var(--secondary-color); margin: 10px auto; }
        .pj-container { display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 40px; }
        .pj-card { background: var(--card-bg); padding: 15px 25px; border-radius: 8px; box-shadow: var(--shadow); border-left: 4px solid var(--secondary-color); text-align: center; min-width: 200px; }
        .pj-label { font-size: 0.85rem; color: #666; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; }
        .pj-name { font-weight: bold; font-size: 1.1rem; color: var(--primary-color); }

        /* --- CONTROLS --- */
        .controls { display: flex; justify-content: center; gap: 15px; margin-bottom: 30px; flex-wrap: wrap; padding: 0 20px; }
        .btn { padding: 12px 25px; border: none; border-radius: 50px; cursor: pointer; font-size: 1rem; font-weight: 500; transition: var(--transition); display: inline-flex; align-items: center; gap: 8px; box-shadow: var(--shadow); }
        .btn-print { background-color: var(--primary-color); color: white; }
        .btn-print:hover { background-color: #144a17; transform: translateY(-2px); }
        .btn-add { background-color: var(--secondary-color); color: white; }
        .btn-add:hover { background-color: #a88645; transform: translateY(-2px); }
        .btn-login { background-color: #333; color: white; }
        .btn-login:hover { background-color: #000; transform: translateY(-2px); }
        .btn-logout { background-color: var(--danger-color); color: white; display: none; } /* Hidden by default */

        /* --- GRID KELOMPOK --- */
        .grid-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px; padding: 0 20px; max-width: 1200px; margin: 0 auto; }
        .group-card { background: var(--card-bg); border-radius: 12px; box-shadow: var(--shadow); padding: 20px; cursor: pointer; transition: var(--transition); border-top: 4px solid var(--primary-color); position: relative; }
        /* =========================
   POPUP EFFECT
========================= */

.group-card.popup-active {
    animation: popupZoom 0.35s ease;
    z-index: 10;
}

@keyframes popupZoom {

    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.08);
        box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    }

    100% {
        transform: scale(1);
    }
}

/* Efek hover lebih halus */
.group-card {
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;
} { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); border-top-color: var(--secondary-color); }
        
        /* Edit Button inside Card */
        .edit-btn {
            position: absolute; top: 15px; right: 15px; background: #eee; border: none; 
            width: 30px; height: 30px; border-radius: 50%; cursor: pointer; 
            color: #555; display: none; /* Hidden by default */
            align-items: center; justify-content: center; font-size: 0.9rem;
            transition: 0.2s;
        }
        .edit-btn:hover { background: var(--secondary-color); color: white; }

        .group-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .group-number { background: var(--primary-color); color: white; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; }
        .group-title { font-weight: bold; font-size: 1.1rem; color: var(--primary-color); }
        .username-badge { font-size: 0.75rem; color: #888; background: #f0f0f0; padding: 2px 8px; border-radius: 10px; display: inline-block; margin-bottom: 5px; }
        .member-preview {
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 6px;
    line-height: 1.5;

    white-space: normal;
    overflow: visible;
    text-overflow: unset;
}
        .click-hint { margin-top: 15px; font-size: 0.8rem; color: #999; text-align: right; font-style: italic; }

        /* --- MODALS --- */
        .modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px);
            display: flex; align-items: center; justify-content: center;
            z-index: 1000; opacity: 0; visibility: hidden; transition: var(--transition);
        }
        .modal-overlay.active { opacity: 1; visibility: visible; }
        .modal-content {
            background: white; width: 90%; max-width: 500px; border-radius: 15px; padding: 30px;
            position: relative; transform: scale(0.7); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3); border: 2px solid var(--secondary-color);
        }
        .modal-overlay.active .modal-content { transform: scale(1); }
        .close-btn { position: absolute; top: 15px; right: 20px; font-size: 1.5rem; cursor: pointer; color: #888; background: none; border: none; }
        .close-btn:hover { color: var(--primary-color); }

        /* Forms */
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 500; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit; }
        .form-row { display: flex; gap: 10px; margin-bottom: 10px; }
        .form-row input:first-child { width: 50px; flex: none; }
        
        /* Detail List */
        .modal-list { list-style: none; margin-top: 20px; }
        .modal-list li { padding: 10px 0; border-bottom: 1px solid #f0f0f0; display: flex; align-items: center; }
        .list-num { background: #eee; color: #555; width: 25px; height: 25px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; margin-right: 15px; font-weight: bold; }

        /* Notification Toast */
        #toast {
            visibility: hidden; min-width: 250px; background-color: #333; color: #fff; text-align: center;
            border-radius: 4px; padding: 16px; position: fixed; z-index: 2000; left: 50%; bottom: 30px;
            transform: translateX(-50%); font-size: 17px;
        }
        #toast.show { visibility: visible; animation: fadein 0.5s, fadeout 0.5s 2.5s; }
        @keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 30px; opacity: 1;} }
        @keyframes fadeout { from {bottom: 30px; opacity: 1;} to {bottom: 0; opacity: 0;} }

        /* Print & Responsive */
        @media print {
            body { background: white; padding: 0; }
            header { padding: 20px; color: black; border-bottom: 2px solid black; background: none; }
            .iso-badge { border: 1px solid #000; color: #000; top: 0; right: 0; }
            .panitia-title { color: #000; }
            .date-item { border: 1px solid #ccc; color: #000; }
            .no-print, .controls, .click-hint, .close-btn, .modal-overlay, .edit-btn, .username-badge { display: none !important; }
            .grid-container { display: block; }
            .group-card { break-inside: avoid; border: 1px solid #ccc; box-shadow: none; margin-bottom: 20px; cursor: default; }
            .group-card:hover { transform: none; border-top-color: black; }
            .pj-card { border: 1px solid #ccc; box-shadow: none; }
        }
        @media (max-width: 600px) {
            .kop-lemabaga { font-size: 1.5rem; }
            .date-container { flex-direction: column; gap: 5px; }
            .controls { flex-direction: column; width: 100%; }
            .btn { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

    <header>
        <div class="iso-badge">ISO 9001:2025</div>
        <div class="kop-lemabaga"><img src="kop.png"></div>
        <div class="panitia-title">PANITIA KURBAN PONPES ABU HURAIRAH MATARAM</div>
        <div class="date-container">
            <div class="date-item">10 Zulhijjah 1447 H</div>
            <div class="date-item">27 Mei 2026 M</div>
    </header>

    <section>
        <h2 class="section-title">PIMPINAN PONPES ABU HURAIRAH MATARAM</h2>
        <div class="pj-container">
            <div class="pj-card">
                <div class="pj-label">MUDIR</div>
                <div class="pj-name">[Ustadz Ibnu Hibban,Lc.,MA]</div>
            </div>
            <div class="pj-card">
                <div class="pj-label">WADIR I</div>
                <div class="pj-name">[Ustadz Tomi Widiatmo,M.Pd]</div>
            </div>
            <div class="pj-card">
                <div class="pj-label">WWADIR II</div>
                <div class="pj-name">[Dr.Hasbialloh,M.Pd.I]</div>
            </div>
        </div>
    </section>

    <!-- CONTROLS -->
    <div class="controls no-print">
        <button class="btn btn-print" onclick="window.print()">🖨️ Cetak Dokumen</button>
        <button class="btn btn-login" id="loginBtn" onclick="openLoginModal()">🔒 Login Admin</button>
        <button class="btn btn-logout" id="logoutBtn" onclick="handleLogout()">🔓 Logout</button>
        <button
    class="btn btn-add"
    id="addBtn"
    onclick="openAddModal()"
    disabled
    style="opacity:0.5; cursor:not-allowed;">
    ➕ Tambah Kelompok
</button>
    </div>

    <main id="groupGrid" class="grid-container">
        <!-- Kartu kelompok dirender oleh JS -->
    </main>

    <!-- MODAL DETAIL (VIEW) -->
    <div id="detailModal" class="modal-overlay" onclick="closeModal('detailModal')">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal('detailModal')">×</button>
            <h2 id="modalTitle" style="text-align: center; color: var(--primary-color); font-family: 'Amiri', serif; margin-bottom: 5px;"></h2>
            <div id="modalUsername" style="text-align: center; color: #888; font-size: 0.9rem; margin-bottom: 10px;"></div>
            <p style="text-align: center; color: #777; font-size: 0.9rem;">Daftar Anggota</p>
            <hr style="border: 0; border-top: 1px solid #eee; margin: 15px 0;">
            <ul id="modalList" class="modal-list"></ul>
            <div style="text-align: center; margin-top: 20px;">
                <button class="btn btn-print" style="padding: 8px 20px; font-size: 0.9rem;" onclick="closeModal('detailModal')">Tutup</button>
            </div>
        </div>
    </div>

    <!-- MODAL LOGIN -->
    
 <!-- MODAL LOGIN -->
<div id="loginModal" class="modal-overlay" onclick="if(event.target === this) closeModal('loginModal')">
    <div class="modal-content" style="max-width: 400px; text-align: center;">
            <button class="close-btn" onclick="closeModal('loginModal')">×</button>
            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Login Admin</h3>
            <div class="form-group">
                <input type="text" id="loginUser" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" id="loginPass" placeholder="Password">
            </div>
            <button class="btn btn-login" style="width: 100%; justify-content: center;" onclick="handleLogin()">Masuk</button>
        </div>
    </div>

    <!-- MODAL ADD / EDIT -->
    <div
    id="formModal"
    class="modal-overlay"
    onclick="if(event.target === this) closeModal('formModal')">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal('formModal')">×</button>
            <h3 id="formModalTitle" style="color: var(--primary-color); margin-bottom: 20px;">Tambah Kelompok</h3>
            
            <input type="hidden" id="editIndex" value="-1"> <!-- -1 means Add, >=0 means Edit -->

            <div class="form-group">
                <label>Nama Kelompok</label>
                <input type="text" id="groupName" placeholder="Contoh: Kelompok 11">
            </div>
            
            <div class="form-group">
                <label>Username Admin Kelompok</label>
                <input type="text" id="groupUsername" placeholder="Username penanggung jawab kelompok">
            </div>

            <label style="font-weight: 500; font-size: 0.9rem;">Anggota (No & Nama)</label>
            <div id="memberInputs"></div>
            
            <button class="btn btn-add" style="width: 100%; margin-top: 10px; padding: 8px; font-size: 0.8rem;" onclick="addMemberInput()">+ Tambah Baris Anggota</button>

            <div style="margin-top: 25px; text-align: right;">
                <div style="display:flex; gap:10px; justify-content:end; flex-wrap:wrap;">

    <button
        class="btn btn-add"
        onclick="saveGroup()">
        Simpan Data
    </button>

    <button
        class="btn btn-login"
        onclick="deleteGroup(document.getElementById('editIndex').value)">
        Hapus
    </button>

</div>
            </div>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div id="toast">Pesan Notifikasi</div>

    <script>


let groups = [];
let adminMode = false;

/* =========================
   LOAD DATA
========================= */
async function init() {
    await loadGroups();
}

async function loadGroups() {

    try {

        const response = await fetch('load_groups.php');

        const text = await response.text();

try {
    groups = JSON.parse(text);
} catch {
    groups = [];
}

        if (!Array.isArray(groups)) {
            groups = [];
        }

        renderGroups();

    } catch (error) {

        console.log(error);

        showToast('Gagal memuat data');
    }
}

/* =========================
   RENDER GROUPS
========================= */
function renderGroups() {

    const container =
        document.getElementById('groupGrid');

    container.innerHTML = '';

    if (groups.length === 0) {

        container.innerHTML = `
            <div style="
                grid-column:1/-1;
                text-align:center;
                background:white;
                padding:30px;
                border-radius:12px;
                box-shadow:var(--shadow);
            ">
                Belum ada data kelompok
            </div>
        `;

        return;
    }

    groups.forEach((group, index) => {

        const card = document.createElement('div');

        card.className = 'group-card';

       const members = Array.isArray(group.members)
    ? group.members
    : [];

const previewText = members
    .slice(0, 10)
    .map((name, i) =>
        `<div>${i + 1}. ${name}</div>`
    )
    .join('');
        const editBtnDisplay =
            adminMode ? 'flex' : 'none';

        card.innerHTML = `

            <button
                class="edit-btn"
                style="display:${editBtnDisplay}"
                onclick="event.stopPropagation(); openEditModal(${index})">
                ✏️
            </button>

            <div class="group-header">

                <div class="group-number">
                    ${group.id}
                </div>

                <div class="group-title">
                    ${group.name}
                </div>

            </div>

            <div class="username-badge">
                User: ${group.username}
            </div>

            <div class="member-preview">
                <strong>Ketua:</strong>
                ${members[0] || '-'}
            </div>

            <div class="member-preview">
                ${previewText}
            </div>

            <div class="click-hint no-print">
                Klik untuk lihat detail
            </div>
        `;

       card.onclick = () => {

    /* Tambahkan efek popup */
    card.classList.add('popup-active');

    /* Tambahkan sedikit delay */
    setTimeout(() => {

        openDetailModal(index);

    }, 220);

    /* Bersihkan animasi */
    setTimeout(() => {

        card.classList.remove('popup-active');

    }, 500);
};
        container.appendChild(card);
    });
}

/* =========================
   LOGIN
========================= */
function openLoginModal() {

    document.getElementById('loginUser').value = '';
    document.getElementById('loginPass').value = '';

    openModal('loginModal');
}

function handleLogin() {

    const u =
        document.getElementById('loginUser')
        .value.trim();

    const p =
        document.getElementById('loginPass')
        .value.trim();

    /* USERNAME & PASSWORD */
    if (u === 'adminkurban' &&
        p === 'Kurban2026!') {

        adminMode = true;

        document.getElementById('loginBtn')
            .style.display = 'none';

        document.getElementById('logoutBtn')
            .style.display = 'inline-flex';

        /* AKTIFKAN TOMBOL TAMBAH */
        const addBtn =
            document.getElementById('addBtn');

        addBtn.disabled = false;

        addBtn.style.opacity = '1';

        addBtn.style.cursor = 'pointer';

        renderGroups();

        closeModal('loginModal');

        showToast('Login berhasil');

    } else {

        showToast('Username atau password salah');
    }
}

/* =========================
   LOGOUT
========================= */
function handleLogout() {

    adminMode = false;

    document.getElementById('loginBtn')
        .style.display = 'inline-flex';

    document.getElementById('logoutBtn')
        .style.display = 'none';

    const addBtn =
        document.getElementById('addBtn');

    addBtn.disabled = true;

    addBtn.style.opacity = '0.5';

    addBtn.style.cursor = 'not-allowed';

    renderGroups();

    showToast('Logout berhasil');
}

/* =========================
   ADD GROUP
========================= */
function openAddModal() {

    if (!adminMode) {

        showToast(
            'Silakan login admin terlebih dahulu'
        );

        return;
    }

    document.getElementById('formModalTitle')
        .innerText = 'Tambah Kelompok';

    /* -1 = tambah data baru */
    document.getElementById('editIndex')
        .value = '-1';

    document.getElementById('groupName')
        .value = '';

    document.getElementById('groupUsername')
        .value = '';

    document.getElementById('memberInputs')
        .innerHTML = '';

    addMemberInput();
    addMemberInput();
    addMemberInput();

    openModal('formModal');
}

/* =========================
   EDIT GROUP
========================= */
function openEditModal(index) {

    if (!adminMode) {

        showToast(
            'Silakan login admin terlebih dahulu'
        );

        return;
    }

    const group = groups[index];

    document.getElementById('formModalTitle')
        .innerText = 'Edit Kelompok';

    document.getElementById('editIndex')
        .value = group.id;

    document.getElementById('groupName')
        .value = group.name;

    document.getElementById('groupUsername')
        .value = group.username;

    document.getElementById('memberInputs')
        .innerHTML = '';

    group.members.forEach(member => {

        addMemberInput(member);
    });

    openModal('formModal');
}

/* =========================
   ADD MEMBER INPUT
========================= */
function addMemberInput(value = '') {

    const container =
        document.getElementById('memberInputs');

    const count =
        container.children.length + 1;

    const div =
        document.createElement('div');

    div.className = 'form-row';

    div.innerHTML = `

        <input
            type="text"
            value="${count}"
            readonly>

        <input
            type="text"
            class="member-name-input"
            placeholder="Nama anggota ${count}"
            value="${value}">
    `;

    container.appendChild(div);
}

/* =========================
   SAVE GROUP
========================= */
async function saveGroup() {

    if (!adminMode) {

        showToast(
            'Anda harus login sebagai admin'
        );

        return;
    }

    const id =
        parseInt(
            document.getElementById('editIndex')
            .value
        );

    const name =
        document.getElementById('groupName')
        .value.trim();

    const username =
        document.getElementById('groupUsername')
        .value.trim();

    const memberInputs =
        document.querySelectorAll(
            '.member-name-input'
        );

    let members = [];

    memberInputs.forEach(input => {

        if (input.value.trim() !== '') {

            members.push(
                input.value.trim()
            );
        }
    });

    if (name === '') {

        showToast(
            'Nama kelompok wajib diisi'
        );

        return;
    }

    if (username === '') {

        showToast(
            'Username wajib diisi'
        );

        return;
    }

    if (members.length === 0) {

        showToast(
            'Minimal 1 anggota'
        );

        return;
    }

    try {

        const response =
            await fetch('save_group.php', {

            method: 'POST',

            headers: {
                'Content-Type':
                    'application/json'
            },

            body: JSON.stringify({
                id,
                name,
                username,
                members
            })
        });

        const result =
            await response.json();

        showToast(
            result.message ||
            'Data berhasil disimpan'
        );

        closeModal('formModal');

        loadGroups();

    } catch (error) {

        console.log(error);

        showToast(
            'Gagal menyimpan data'
        );
    }
}

/* =========================
   DELETE GROUP
========================= */
async function deleteGroup(id) {

    if (!adminMode) {

        showToast(
            'Anda harus login admin'
        );

        return;
    }

    if (id == -1) {

        showToast(
            'Data belum tersimpan'
        );

        return;
    }

    const confirmDelete =
        confirm(
            'Yakin ingin menghapus kelompok ini?'
        );

    if (!confirmDelete) {

        return;
    }

    try {

        const response =
            await fetch(
                'delete_group.php',
                {

                method: 'POST',

                headers: {
                    'Content-Type':
                        'application/json'
                },

                body: JSON.stringify({
                    id
                })
            });

        const result =
            await response.json();

        showToast(
            result.message ||
            'Data berhasil dihapus'
        );

        closeModal('formModal');

        loadGroups();

    } catch (error) {

        console.log(error);

        showToast(
            'Gagal menghapus data'
        );
    }
}

/* =========================
   DETAIL MODAL
========================= */
function openDetailModal(index) {

    const group = groups[index];

    document.getElementById('modalTitle')
        .innerText = group.name;

    document.getElementById('modalUsername')
        .innerText =
            'Username: ' + group.username;

    const list =
        document.getElementById('modalList');

    list.innerHTML = '';

    members.forEach((member, idx) => {

        const li =
            document.createElement('li');

        li.innerHTML = `
            <span class="list-num">
                ${idx + 1}
            </span>

            <span>
                ${member}
            </span>
        `;

        list.appendChild(li);
    });

    openModal('detailModal');
}

/* =========================
   MODAL
========================= */
function openModal(id) {

    document.getElementById(id)
        .classList.add('active');
}

function closeModal(id) {

    document.getElementById(id)
        .classList.remove('active');
}

/* =========================
   TOAST
========================= */
function showToast(message) {

    const x =
        document.getElementById('toast');

    x.innerText = message;

    x.className = 'show';

    setTimeout(() => {

        x.className =
            x.className.replace(
                'show',
                ''
            );

    }, 3000);
}

/* =========================
   ENTER LOGIN
========================= */
document.addEventListener(
    'keydown',
    function(event) {

    if (event.key === 'Enter') {

        const loginModal =
            document.getElementById(
                'loginModal'
            );

        if (
            loginModal.classList
            .contains('active')
        ) {

            handleLogin();
        }
    }
});

/* =========================
   START APP
========================= */
window.onload = init;
document.body.classList.add('popup-open');
document.body.classList.remove('popup-open');
</script>
</script>
<script type="card.onclick = () => {

    card.classList.add('popup-active');

    setTimeout(() => {

        openDetailModal(index);

    }, 220);

    setTimeout(() => {

        card.classList.remove('popup-active');

    }, 500);
};"></script>


</body>
</html>