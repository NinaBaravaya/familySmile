
        <section>
            <div class="ya_map">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=iX07QoDUprsZsrj21JqflEJ0j28fJOcF&width=1020&height=420&lang=ru_RU&sourceType=constructor"></script>
                <div class="address">
                    <p>МИНСК</p>
                    <div>
                        пр.Независимости, 185<br/>
                        с 8.30 до 20.00 (Пн-Пт)<br/>
                        <span class="email_color">familySmile@gmail.com</span><br/>
                        <span class="phone_color">(029) 887 77 77<br/>
                        (044) 998 77 77</span>
                    </div>
                </div>
            </div>


            <div class="problems">
                <div class="online_appointnemt">
                <form class="form-horizontal" action="" method="post" name="form_feedback" id="form_feedback" onsubmit="return checkFields_feedback()">
                    <h2>Запись на консультацию</h2>
                    <p>Оставьте свое сообщение и контактные данные и ниша менеджеры связуться с вами в течение 10 минут</p>
                    <p></p>
                    <ul>
                        <li>
                            <ul>
                                <li>
                                    <input type="hidden" name="formData2" value="Онлайн-запись">
                                    <label class="form_label" for="Name"><strong>Ваше имя *</strong></label><br/>
                                    <input type="text" id="Name" name="Name" tabindex="1" required>
                                </li>
                                <li>
                                    <label for="Surname"><strong>Ваша фамилия *</strong></label><br/>
                                    <input type="text" id="Surname" name="Surname" tabindex="2" required>
                                </li>
                                <li>
                                    <label for="Phone"><strong>Ваш телефон *</strong></label><br/>
                                    <input type="text" id="Phone" name="Phone" tabindex="3" required>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li>
                                    <label for="Email">Ваш email</label><br/>
                                    <input type="email" id="Email" name="Email" tabindex="4">
                                </li>
                                <li>
                                    <label for="Date">Желаемая дата посещения</label><br/>
                                    <input type="text" id="Date" name="Date" class="tcal" value="" tabindex="5"/>
                                    <span class="ui-datepicker-append"> (dd/mm/yyyy)</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="smalltext"><label class="control-label feedbacklable" for="Message">Сообщение</label></div>
                                <textarea name="Message" onfocus="if(document.form_feedback.textLiked.value=='введите сообщение'){ document.form_feedback.textLiked.value='' }"
                                          onblur="if(document.form_feedback.textLiked.value==''){ document.form_feedback.textLiked.value='введите сообщение' }"
                                          onkeyup="limiter();" cols="70" rows="5" id="Message"
                                          tabindex="10" maxlength="2000">введите сообщение</textarea>
                    <br><br>
                    <div class="captch-box">

                        <span><label for="txtCaptcha_feedback" class="verify-txt"><strong>Проверка *</strong> </label></span>
                        <input type="text" class="sm-input" id="txtCaptcha_feedback" maxlength="4" name="captcha_code" required="" tabindex="14"><br/>
                        <img src="form/captcha.php" id="imgCaptcha_feedback" class="captcha-img" alt="Captcha">
                        <input type="submit" name="req" value="Отправить" class="btn" onclick="return checkFields_feedback()" tabindex="15">

                    </div>
                    </form>



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
            <div data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc">
                <div class="remodalPadding">
                    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                    <form id="form">
                    </form>
                </div>
            </div>
            <div id="form_backup">
                <h2>Заказать звонок</h2>
                <p>Оставьте свой вопрос и контактные данные и наш администратор свяжеться с вами в течение 10 минут </p>
                <input type="text" class="putName" name="name" placeholder="Ваше имя" required>
                <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
                <input type="submit" name="submit" class="btn" value="Отправить">
                <input type="hidden" name="formData" value="Заказать звонок">
            </div>

