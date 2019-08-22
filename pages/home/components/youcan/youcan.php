<style>
    <?= include 'youcan.css'; ?>
</style>

<div id="youcanId" class="youcan" style="background-image: url('<?= get_template_directory_uri(); ?>/images/patt_diagonals.png')">


    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="t">
                    <h2>Результаты тренинга <span>АКЦЕНТ</span>:</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 pb-3 d-flex align-items-start justify-content-center przi">
                <div class="youcan-card">
                    <img class="mr-3" src="<?= get_template_directory_uri(); ?>/images/resul/facebook-like.png">
                    <div class="t text-lg-right">
                        <h4>Эмоциональная устойчивость</h4>
                        <p>Вы очищаетесь от накопившегося внутри негатива: старых обид, ненависти, чувства вины. Вам легко выстраивать коммуникацию с окружающими людьми. Вы спокойнее реагируете на внешние раздражители. Вас не выбивают из колеи мелкие неурядицы.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-3 d-flex align-items-start justify-content-center przi">
                <div class="youcan-card">
                    <div class="t text-lg-left order-1 order-sm-0">
                        <h4>Моральная и физическая выносливость</h4>
                        <p>Вы легче переносите нагрузки, дольше не устаёте в повседневной жизни.</p>
                    </div>
                    <img class="ml-3 order-0 order-sm-1" src="<?= get_template_directory_uri(); ?>/images/resul/730325-200.png">
                </div>
            </div>
            <div class="col-lg-6 pb-3 d-flex align-items-start justify-content-center przi">
                <div class="youcan-card text-center">
                    <img class="mr-3" src="<?= get_template_directory_uri(); ?>/images/resul/users.png">
                    <div class="t text-lg-right">
                        <h4>Отношения</h4>
                        <p>Вам удаётся завершить давние конфликты в семье. Выйти с позитивом из самых сложных ситуаций. Вы обнаруживаете в себе новые ресурсы для выхода из замкнутого круга. Ваша семейная жизнь обретает второе дыхание, вы находите понимание и поддержку там, где раньше и не мечтали.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-3 d-flex align-items-start justify-content-center przi">
                <div class="youcan-card">
                    <div class="t text-lg-left order-1 order-sm-0">
                        <h4>Уверенность в себе</h4>
                        <p>Вы освобождаетесь от всего, что тянет вас назад. Вы обретаете внутреннюю гармонию и раскрепощённость. Ставите перед собой новые цели.Вы находите внутренний источник силы для постоянного движения вперед и обретёте ясность мыслей.</p>
                    </div>
                    <img class="ml-3 order-0 order-sm-1" src="<?= get_template_directory_uri(); ?>/images/resul/steps.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Зарегистрироватсья на интенсив', 'formModalLongTitle',
                         'Акцент => Результаты тренинга:', 'formModalLocationId')">
                        Зарегистрироваться на интенсив
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>