<style>
    <?= include 'youcan.css'; ?>
</style>

<div class="youcan" style="background-color: white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-5">
                <div class="t">
                    <h3>Ты получишь максимальную пользу<br>
                        от интенсива, если:</h3>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Layer_4.svg">
                    <div class="t">
                        <p>Пришло время посмотреть, куда двигаться дальше</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Tilda_Icons_30_system_reload.svg">
                    <div class="t">
                        <p>Хочется обновить устаревшие программы</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Tilda_Icons_37_Finance_technologies_growth.svg">
                    <div class="t">
                        <p>Тебе мало полученных результатов</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Tilda_Icons_39_IT_effective.svg">
                    <div class="t">
                        <p>Важно повысить собственную эффективность</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/2web_target.svg">
                    <div class="t">
                        <p>Хочется от жизни большего</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Tilda_Icons_45_quest_hard.svg">
                    <div class="t">
                        <p>Выявить, что тебя ограничивает</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Зарегистрироваться на интенсив', 'formModalLongTitle')">Зарегистрироватсья на интенсив</button>
                </div>
            </div>
        </div>
    </div>
</div>