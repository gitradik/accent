<style>
    <?= include 'warning.css'; ?>
</style>

<div class="warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="t">
                    <h3>Предупреждаю!</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="w-speaker">
                    <img src="<?= get_template_directory_uri(); ?>/images/speaker.jpg" alt="speaker">
                    <div class="t">
                        <h4>👉 Этот интенсив <span>- не мотивационное выступление, где я буду вдохновлять тебя на подвиги.</span></h4>
                        <h4 class="mb-5"><small>НО:</small> ты точно поймешь, как трансформировать свое мышление.</h4>
                        <h4>👉 Этот интенсив <span>- не инструкция что делать, а системная карта фундаментальных принципов.</span> </h4>
                        <h4><small>РЕЗУЛЬТАТ:</small>  ты четко увидишь куда тебе двигаться, какие решения принимать, с какими людьми сотрудничать, к чему стремиться. </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pt-5">
                <div class="order">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Зарегистрироваться на интенсив', 'formModalLongTitle')">зарегистрироваться на интенсив</button>
                </div>
            </div>
        </div>
    </div>
</div>