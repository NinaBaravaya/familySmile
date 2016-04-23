
        <section>
            <div class="first">
                <div class="text_goal">
                    <h2>Услуги</h2>
                    <p>Наша миссия - заботиться о здоровьи зубов и полости рта вас и вашей семьи<br/>Мы подарим улыбку каждому!</p>
                    <a href="#modal"><button name="one" onclick="AppointmentClicked()">Заказать звонок</button></a>
                    <div data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc">
                        <div class="remodalPadding">
                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                            <form id="form">
                            </form>
                        </div>
                    </div>
                    <div id="form_backup">
                        <h2>Запись на консультацию</h2>
                        <p>Оставьте свой вопрос и контактные данные и наш администратор свяжеться с вами в течение 10 минут </p>
                        <input type="text" class="putName" name="name" placeholder="Ваше имя" required>
                        <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
                        <input type="submit" name="submit" class="btn" value="Отправить">
                        <input type="hidden" name="formData" value="Заявка с сайта">
                    </div>
                </div>
            </div>

            <div class="second_o_nas">

                <div class="hotbutton_usl">
                    <ul>
                        <li class="span4 band_usl"><a href="usluga_1.tpl" title="терапия">
                            <img src="img_usl/1.jpg" width="280" height="200" alt="терапия">
                            <span class="text" >ТЕРАПИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>


                        <li class="span4 band_usl"><a href="usluga_2.tpl" title="ортопедия">
                            <img src="img_usl/2.jpg" width="280" height="200" alt="ортопедия">
                            <span class="text">ОРТОПЕДИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28"  title="далее"  alt="далее"></div></a>
                        </li>

                        <li class="span4 band_usl"><a href="usluga_3.tpl" title="хирургия">
                            <img src="img_usl/3.jpg" width="280" height="200" alt="хирургия">
                            <span class="text">ХИРУРГИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28"  title="далее"  alt="далее"></div></a>
                        </li>
                    </ul>


                <div class="imgCenter">
                    <img src="img_glavnaya/text_fs.png" alt="familySmile" title="полный спектр услуг">Семейная стоматология полного цикла услуг
                </div>

                    <ul>
                        <li class="span4 band_usl"><a href="usluga_4.tpl" title="ортодонтия">
                            <img src="img_usl/4.jpg" width="280" height="200" alt="ортодонтия">
                            <span class="text" >ОРТОДОНТИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>


                        <li class="span4 band_usl"><a href="usluga_5.tpl" title="гигиена">
                            <img src="img_usl/5.jpg" width="280" height="200" alt="гигиена">
                            <span class="text">ГИГИЕНА</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>

                        <li class="span4 band_usl"><a href="usluga_6.tpl" title="диагностика">
                            <img src="img_usl/6.jpg" width="280" height="200" alt="диагностика">
                            <span class="text">ДИАГНОСТИКА</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>
                    </ul>
                    <ul class=" two">
                        <li class="span4 band_usl"><a href="usluga_7.tpl" title="детская стоматология">
                            <img src="img_usl/7.jpg" width="280" height="200" alt="десткая стоматология">
                            <span class="text" >ДЕТСКАЯ СТОМАТОЛОГИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>


                        <li class="span4 band_usl"><a href="usluga_8.tpl" title="эстетическая стоматология">
                            <img src="img_usl/8.jpg" width="280" height="200" alt="эстетическая стоматология">
                            <span class="text">ЭСТЕТИЧЕСКАЯ СТОМАТОЛОГИЯ</span>
                            <div class="next"><img src="img_glavnaya/next.png" width="79" height="28" title="далее"  alt="далее"></div></a>
                        </li>


                    </ul>
                </div>

          </div>

            <div class="reviews">
             <span class="quote"><img src="images/qoute-left.png" alt="Qoute" class="qoute-left">
                <span class="zero"></span>
                 <img src="images/qoute-right.png" alt="Qoute" class="qoute-right">
             </span>
                <div id="slider">
                    <h2>
                        <span id="fleche_gauche" class="fleche" onClick="prevImage()" ></span>
                        <a href="reviews.php">ОТЗЫВЫ ПАЦИЕНТОВ</a>
                        <span id="fleche_droite" class="fleche" onClick="nextImage()" ></span>
                    </h2>


                    <div id="mask">

                        <ul id="image_container">

                            <li>Ходили на прием вместе с сыном оба остались очень довольны</li>
                            <li>Ходили на прием вместе с сыном оба остались очень довольны</li>
                            <li>Ходили на прием вместе с сыном оба остались очень довольны</li>
                            <li>Ходили на прием вместе с сыном оба остались очень довольны</li>

                        </ul>
                    </div>

                </div>

            </div>
            <a href="#modal"><button name="third" onclick="AppointmentClicked()">Заказать звонок</button></a>


