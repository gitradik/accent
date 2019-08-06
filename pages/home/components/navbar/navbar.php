<style>
    <?= include 'navbar.css'; ?>
</style>

<nav id="mainNavbarId" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img id="mainNavbarbrandId" src="<?= get_template_directory_uri(); ?>/pages/home/components/navbar/ovitta-logo-white.png" alt="ovitta-logo">
    </a>
    <button id="mainNavBarToggleId" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamListId" aria-controls="hamListId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-image: url('<?= get_template_directory_uri(); ?>/images/ham-menu.png')"></span>
    </button>

    <div class="collapse navbar-collapse" id="hamListId">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#usefulId">Полезно</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#videoinvId">Видео приглашение</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#videoblogId">Видео блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link smooth-anchor" href="#footerId">Контакты</a>
            </li>
            <li class="nav-item nav-order">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#formModal"
                    onclick="onClickFormModal('Заказать звонок', 'formModalLongTitle')"
                >Заказать звонок</a>
            </li>
        </ul>
    </div>
</nav>

<script>

    window.onload = () => checkStyleNavbar();
    window.onscroll = () => checkStyleNavbar();
    window.onresize = () => checkStyleNavbar();



    function checkStyleNavbar() {
        const mainNavbar = document.getElementById('mainNavbarId');
        const mainNavbarbrand = document.getElementById('mainNavbarbrandId');
        if(window.scrollY < 50 && window.innerWidth >= 992) {
            if(mainNavbar.classList.contains('navbar-in')) {
                mainNavbar.classList.remove('navbar-in');
                mainNavbarbrand.src = "<?= get_template_directory_uri() ?>/pages/home/components/navbar/ovitta-logo-white.png";
            }
        } else {
            if(!mainNavbar.classList.contains('navbar-in')) {
                mainNavbar.classList.add('navbar-in');
                mainNavbarbrand.src = "<?= get_template_directory_uri(); ?>/pages/home/components/navbar/ovitta-logo-kt.png"
            }
        }
    }


</script>