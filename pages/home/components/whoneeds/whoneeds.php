<style>
    <?= include 'whoneeds.css'; ?>
</style>

<div class="whoneeds">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t">
                    <div class="cos position-relative my-4">
                        <svg width="37px" height="31px" viewBox="0 0 37 31"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-701.000000, -4615.000000)" fill="#000000"> <g transform="translate(701.000000, 4615.000000)"> <path d="M9.2342197,31 L0.520616382,31 L12.8070131,0.73046875 L21.5206164,0.73046875 L9.2342197,31 Z"></path> <path d="M24.5963811,31 L15.8827778,31 L28.1691745,0.73046875 L36.8827778,0.73046875 L24.5963811,31 Z"></path> </g> </g> </g> </svg>
                    </div>
                    <h4>Кому необходим интенсив?</h4>
                    <p class="d-lg-none">( жми «+», чтобы посмотерь свою пользу )</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="whoheeds-pluses d-lg-none">
                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 0)"><span>СПЕЦИАЛИСТУ</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как перейти от зарплаты к гонорару?</h4>
                            <p>Самая распространенная «боль» специалиста - это неспособность адекватно оценить, сколько реально стоят его услуги.
                                <br><br>
                                Если это про тебя - интенсив поможет понять, как увеличить свой гонорар и получать больше заказов, чем ты можешь реализовать.</p>
                        </div>
                    </div>

                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 1)""><span>ПРОДАВЦУ</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как зарабатывать больше?</h4>
                            <p>Профессиональный продавец годами нарабатывает коммуникативные навыки и главным критерием его работы является большие чеки за меньший период.
                                <br><br>
                                Интенсив позволит понять, как за счет смены фокуса резко увеличить твой доход.</p>
                        </div>
                    </div>
                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 2)"><span>ПРЕДПРИНИМАТЕЛЮ</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как достичь автономии в бизнесе?</h4>
                            <p>Мечта предпринимателя - сделать свой бизнес самостоятельным и независимым от себя - автономным.
                                <br><br>
                                Автономия бизнеса - это именно то, зачем предприниматель трудится много лет круглые сутки без выходных.
                                Увязнув в рутине, предприниматели рано или поздно выдыхаются.
                                <br><br>
                                Интенсив поможет тебе увидеть, как выбраться из замкнутого круга.</p>
                        </div>
                    </div>
                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 3)"><span>HR-у</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как создать корпоративную культуру?</h4>
                            <p>HR - одна из опор компании. Он и создает условия, чтобы люди работали продуктивно и является фильтром от ненужных людей в организации. На нем же лежат все обучающие процессы в компании.
                                <br><br>
                                Интенсив даст возможность освежить свой взгляд и обнаружить неожиданный ресурс для построения корпоративной культуры.</p>

                        </div>
                    </div>
                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 4)"><span>РУКОВОДИТЕЛЮ</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как увеличить свою стоимость на рынке?</h4>
                            <p>Ключевая компетенция руководителя - обеспечить результат. От этого зависит стоимость менеджера на рынке.
                                Чем больше эти результаты - тем больше стоимость менеджера на рынке.
                                <br><br>
                                Любой коллектив - карикатура на руководителя. Поэтому интенсив позволит увидеть, как тебе создать беспрецедентное конкурентное преимущество.</p>

                        </div>
                    </div>
                    <div class="pluses-item">
                        <button onclick="onClickPlusesItem(this, 5)"><span>СОБСТВЕННИКУ</span><i class="fas fa-plus-circle"></i></button>
                        <div class="t t-plus">
                            <h4>Как масштабировать бизнес?</h4>
                            <p>Ключевой фокус собственника - это стратегия. Он определяет глобальные цели, которую потом реализуют его директора.
                                <br><br>
                                Интенсив поможет тебе выйти из рутины, подняться на процессами и обнаружить самые перспективные направления для развития.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="whoneeds-tabs d-none d-lg-block">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="specialist-tab" data-toggle="tab" href="#specialist" role="tab" aria-controls="specialist" aria-selected="true">
                                СПЕЦИАЛИСТУ ⤵
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="saller-tab" data-toggle="tab" href="#saller" role="tab" aria-controls="saller" aria-selected="false">
                                ПРОДАВЦУ ⤵
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bussines-tab" data-toggle="tab" href="#bussines" role="tab" aria-controls="bussines" aria-selected="false">
                                ПРЕДПРИНИМАТЕЛЮ ⤵
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hr-tab" data-toggle="tab" href="#hr" role="tab" aria-controls="hr" aria-selected="false">
                                HR-у ⤵
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="rukov-tab" data-toggle="tab" href="#rukov" role="tab" aria-controls="rukov" aria-selected="false">
                                РУКОВОДИТЕЛЮ ⤵
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sobst-tab" data-toggle="tab" href="#sobst" role="tab" aria-controls="sobst" aria-selected="false">
                                СОБСТВЕННИКУ ⤵
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="specialist" role="tabpanel" aria-labelledby="specialist-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/special.jpg" alt="special">
                                <div class="t">
                                    <h4>Как перейти от зарплаты к гонорару?</h4>
                                    <p>Самая распространенная «боль» специалиста - это неспособность адекватно оценить, сколько реально стоят его услуги.
                                        <br><br>
                                        Если это про тебя - интенсив поможет понять, как увеличить свой гонорар и получать больше заказов, чем ты можешь реализовать.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="saller" role="tabpanel" aria-labelledby="saller-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/sale2.jpg" alt="sale2">
                                <div class="t">
                                    <h4>Как зарабатывать больше?</h4>
                                    <p>Профессиональный продавец годами нарабатывает коммуникативные навыки и главным критерием его работы является большие чеки за меньший период.
<br><br>
                                        Интенсив позволит понять, как за счет смены фокуса резко увеличить твой доход.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bussines" role="tabpanel" aria-labelledby="bussines-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/Enterpreneur.jpg" alt="Enterpreneur">
                                <div class="t">
                                    <h4>Как достичь автономии в бизнесе?</h4>
                                    <p>Мечта предпринимателя - сделать свой бизнес самостоятельным и независимым от себя - автономным.
                                        <br><br>
                                        Автономия бизнеса - это именно то, зачем предприниматель трудится много лет круглые сутки без выходных.
                                        Увязнув в рутине, предприниматели рано или поздно выдыхаются.
                                        <br><br>
                                        Интенсив поможет тебе увидеть, как выбраться из замкнутого круга.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hr" role="tabpanel" aria-labelledby="hr-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/hr.jpg" alt="hr">
                                <div class="t">
                                    <h4>Как создать корпоративную культуру?</h4>
                                    <p>HR - одна из опор компании. Он и создает условия, чтобы люди работали продуктивно и является фильтром от ненужных людей в организации. На нем же лежат все обучающие процессы в компании.
                                        <br><br>
                                        Интенсив даст возможность освежить свой взгляд и обнаружить неожиданный ресурс для построения корпоративной культуры.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rukov" role="tabpanel" aria-labelledby="rukov-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/ruk.jpg" alt="ruk">
                                <div class="t">
                                    <h4>Как увеличить свою стоимость на рынке?</h4>
                                    <p>Ключевая компетенция руководителя - обеспечить результат. От этого зависит стоимость менеджера на рынке.
                                        Чем больше эти результаты - тем больше стоимость менеджера на рынке.
                                        <br><br>
                                        Любой коллектив - карикатура на руководителя. Поэтому интенсив позволит увидеть, как тебе создать беспрецедентное конкурентное преимущество.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sobst" role="tabpanel" aria-labelledby="sobst-tab">
                            <div class="tab-who">
                                <img src="<?= get_template_directory_uri(); ?>/images/whoneeds/owner.jpg" alt="owner">
                                <div class="t">
                                    <h4>Как масштабировать бизнес?</h4>
                                    <p>Ключевой фокус собственника - это стратегия. Он определяет глобальные цели, которую потом реализуют его директора.
                                        <br><br>
                                        Интенсив поможет тебе выйти из рутины, подняться на процессами и обнаружить самые перспективные направления для развития.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>