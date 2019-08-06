<style>
    <?= include 'youcan.css'; ?>
</style>

<div class="youcan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-5">
                <div class="t">
                    <h3>Ты сможешь:</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/Layer_4.svg">
                    <div class="t">
                        <h4>Подняться</h4>
                        <p>над процессами</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/1ed_brain.svg">
                    <div class="t">
                        <h4>Активизировать</h4>
                        <p>мозг для перемен</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center">
                <div class="youcan-card text-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/18ked_psychology.svg">
                    <div class="t">
                        <h4>Освободить</h4>
                        <p>голову от мусора</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center">
                <div class="youcan-card">
                    <img src="<?= get_template_directory_uri(); ?>/images/youcan/2web_target.svg">
                    <div class="t">
                        <h4>Восстановить</h4>
                        <p>первоначальное видение</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Зарегистрироватсья на интенсив', 'formModalLongTitle')">Зарегистрироватсья на интенсив</button>
                </div>
            </div>
        </div>
    </div>
</div>