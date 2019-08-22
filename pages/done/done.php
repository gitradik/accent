<?= get_header(); ?>

    <style>
        <?= include 'done.css'; ?>
    </style>

    <div class="done" style="background-image: url('<?= get_template_directory_uri(); ?>/images/photoeditorsdk.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column align-items-center">
                    <div class="done-text">
                        <h3> Благодарю за регистрацию!</h3>
                        <p> Ссылка на участие придет на указанный E-mail за 30 мин. до начала</p>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="t mt-3">
                        <h4>ПОКА ПОСМОТРИТЕ СПЕЦИАЛЬНОЕ ВИДЕО НИЖЕ</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="t t-done">
                        <h5> Из него Вы узнаете:</h5>
                        <ul>
                            <li> ✔ Принцип сильных и слабых сторон</li>
                            <li> ✔ 4 типа людей: к чему Вы предрасположены?</li>
                            <li> ✔ Решения для Вашего развития</li>
                        </ul>




                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8oC8t9EZjAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<?= get_footer(); ?>