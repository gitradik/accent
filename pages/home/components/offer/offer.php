<style>
    <?= include "offer.css";?>
</style>

<div class="offer" style="background-image: url('<?= get_template_directory_uri(); ?>/images/photo_2019-08-05_09-16-31.jpg')">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <div class="t text-left">
                    <h3>Уже решились <span>КАРДИНАЛЬНО</span><br> изменить свою жизнь к лучшему?</h3>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Принять участие в тренинге', 'formModalLongTitle', 'Акцент => Уже решились КАРДИНАЛЬНО изменить свою жизнь к лучшему?', 'formModalLocationId')">
                        Принять участие в тренинге
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>