<div id="nav-bar"><input id="nav-toggle" type="checkbox" />

    <div id="nav-header" onclick="document.getElementById('dashboardLink').click()"><a id="nav-title" href="#"
            target="_blank">XI RPL</a><label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
        <hr />
    </div>
    <div id="nav-content">
        <!-- <div class="nav-button"><i class="fas fa-palette"></i><span>Profil</span></div>
        <div class="nav-button"><i class="fas fa-images"></i><span>Assets</span></div>
        <div class="nav-button"><i class="fas fa-thumbtack"></i><span>Pinned Items</span></div>
        <hr />
        <div class="nav-button"><i class="fas fa-heart"></i><span>Following</span></div>
        <div class="nav-button"><i class="fas fa-chart-line"></i><span>Trending</span></div>
        <div class="nav-button"><i class="fas fa-fire"></i><span>Challenges</span></div>
        <div class="nav-button"><i class="fas fa-magic"></i><span>Spark</span></div> -->
        <?php
if (isset($_SESSION['role'])) {
    $profileLink = '';
    $galleryLink = '';
    $newsLink = '';
    $absensiLink = '';
    $jadwalLink = '';
    $nilaiLink = '';

    switch ($_SESSION['role']) {
        case 'student':
            $profileLink = '/profileLink/';
            $galleryLink = '/galleryLink/';
            $newsLink = '/newsLink/';
            $absensiLink = '/absensiLink/';
            $jadwalLink = '/jadwalLink/';
            $nilaiLink = '/nilaiLink/';
            break;
        case 'teacher':
            $profileLink = '/profileLink/';
            $galleryLink = '/galleryLink/';
            $newsLink = '/newsLink/';
            $absensiLink = '/absensiLink/';
            $jadwalLink = '/jadwalLink/';
            $nilaiLink = '/nilaiLink/';
            break;
        case 'admin':
            $profileLink = '/profileLink/';
            $galleryLink = '/galleryLink/';
            $newsLink = '/newsLink/';
            $absensiLink = '/absensiLink/';
            $jadwalLink = '/jadwalLink/';
            $nilaiLink = '/nilaiLink/';
            break;
        case 'operator':
            $profileLink = '/profileLink/';
            $galleryLink = '/galleryLink/';
            $newsLink = '/newsLink/';
            $absensiLink = '/absensiLink/';
            $jadwalLink = '/jadwalLink/';
            $nilaiLink = '/nilaiLink/';
            break;
        default:
            // Handle other cases if needed
            break;
    }

    echo ("
        <div class='nav-button' onclick=\"document.getElementById('$profileLink').click()\"><i class='fas fa-user'></i><span>Profil</span></div>
        <div class='nav-button' onclick=\"document.getElementById('$galleryLink').click()\"><i class='fas fa-image'></i><span>Gallery</span></div>
        <div class='nav-button' onclick=\"document.getElementById('$newsLink').click()\"><i class='fas fa-newspaper'></i><span>News</span></div>
        <div class='nav-button' onclick=\"document.getElementById('$absensiLink').click()\"><i class='fas fa-edit'></i><span>Absensi</span></div>
        <div class='nav-button' onclick=\"document.getElementById('$jadwalLink').click()\"><i class='fas fa-calendar'></i><span>Jadwal</span></div>
        <div class='nav-button' onclick=\"document.getElementById('$nilaiLink').click()\"><i class='fas fa-star'></i><span>Nilai</span></div>
    ");
} else {
    // Handle the case when $_SESSION['role'] is not set
}
?>


        <hr />
        <div class="nav-button" onclick="document.getElementById('logoutLink').click()"><i
                class="fas fa-sign-out"></i><span>Log Out</span></div>
        <div id="nav-content-highlight"></div>
    </div><input id="nav-footer-toggle" type="checkbox" />
    <div id="nav-footer">
        <div id="nav-footer-heading">
            <div id="nav-footer-avatar">
                <?php
                $imageData = base64_decode($_SESSION['image']);
                echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" >';

                ?>
            </div>

            <div id="nav-footer-titlebox"><a id="nav-footer-title" href="" target="_blank">
                    <?php echo $_SESSION['username']; ?>
                </a><span id="nav-footer-subtitle">
                    <?php echo $_SESSION['role']; ?>
                </span></div><label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
        </div>
        <div id="nav-footer-content">
            <Lorem>
                <?php

                echo $_SESSION['description'];

                ?>
            </Lorem>
        </div>
    </div>
</div>

<!-- LINKS -->

<a href="../profil" id="profileLink" style="display:none;"></a>

<a href="../gallery" id="galleryLink" style="display:none;"></a>

<a href="../news" id="newsLink" style="display:none;"></a>

<a href="../absensi" id="absensiLink" style="display:none;"></a>

<a href="../jadwal" id="jadwalLink" style="display:none;"></a>

<a href="../nilai" id="nilaiLink" style="display:none;"></a>

<a href="../dashboard" id="dahsboardLink" style="display:none;"></a>

<a href="../logout" id="logoutLink" style="display:none;"></a>