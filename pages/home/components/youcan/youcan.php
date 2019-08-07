<style>
    <?= include 'youcan.css'; ?>
</style>

<div class="youcan" style="background-image: url('<?= get_template_directory_uri(); ?>/images/patt_diagonals.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pb-5">
                <div class="t">
                    <h3>Результаты тренинга:</h3>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-sm-12 col-md-6 d-flex align-items-start justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/success.svg">
                    <div class="t">
                        <h4>Эмоциональная устойчивость</h4>
                        <p>Вы очищаетесь от накопившегося внутри негатива: старых обид, ненависти, чувства вины. Вам легко выстраивать коммуникацию с окружающими людьми. Вы спокойнее реагируете на внешние раздражители. Вас не выбивают из колеи мелкие неурядицы.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-start justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/success.svg">
                    <div class="t">
                        <h4>Моральная и физическая выносливость</h4>
                        <p>Вы легче переносите нагрузки, дольше не устаёте в повседневной жизни.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-start justify-content-center">
                <div class="youcan-card text-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/success.svg">
                    <div class="t">
                        <h4>Отношения</h4>
                        <p>Вам удаётся завершить давние конфликты в семье. Выйти с позитивом из самых сложных ситуаций. Вы обнаруживаете в себе новые ресурсы для выхода из замкнутого круга. Ваша семейная жизнь обретает второе дыхание, вы находите понимание и поддержку там, где раньше и не мечтали.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-start justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/success.svg">
                    <div class="t">
                        <h4>Уверенность в себе</h4>
                        <p>Вы освобождаетесь от всего, что тянет вас назад. Вы обретаете внутреннюю гармонию и раскрепощённость. Ставите перед собой новые цели.Вы находите внутренний источник силы для постоянного движения вперед и обрете ясность мыслей.</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Зарегистрироватсья на интенсив', 'formModalLongTitle')">
                        Зарегистрироватсья на интенсив
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>