
        <section>

            <div class="first">

                <div class="text_goal">
                    <h2>Оставить отзыв</h2>
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
                        <h2>Заказать звонок</h2>
                        <p>Оставьте свой вопрос и контактные данные и наш администратор свяжеться с вами в течение 10 минут </p>
                        <input type="text" class="putName" name="name" placeholder="Ваше имя" required>
                        <input name="phone" type="tel" class="putPhone" placeholder="Введите номер телефона" required>
                        <input type="submit" name="submit" class="btn" value="Отправить">
                        <input type="hidden" name="formData" value="Заказать звонок">
                    </div>
                </div>
            </div>

            <div class="second_reviews">
                <div class="replace_review"><a href="reviews.php">вернуться к отзывам</a></div>
                <div class="review_form">
                    <h2>Оставить отзыв</h2>
                <p>Для того, чтобы оставить отзыв, отправьте нам сообщение на <a href="mailto:familySmile@gmail.com">familySmile@gmail.com</a> или заполните форму ниже.
                    Поля, отмеченные * обязательны для заполнения.
                </p>
                    <form class="form-horizontal" action="mail.php" method="post" name="form_feedback" id="form_feedback" onsubmit="return checkFields_feedback()">
                        <ul>
                            <li>
                                <ul>
                                    <li>
                                        <input type="hidden" name="formData1" value="Оставить отзыв">
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
                                        <label for="date">Дата посещения</label><br/>
                                        <input type="text" id="date" name="Date" class="tcal" tabindex="5"/>
                                        <span class="ui-datepicker-append"> (dd/mm/yyyy)</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="span6">
                                <div class="smalltext"><label for="Appointment">Общая оценка врача</label></div>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody><tr>
                                        <td><label><input type="radio" id="RatingValue0" class="height_buttom" name="Doctor_rating" value="я буду рекомендовать врача" checked="checked">
                                            Я бы порекомендовал этого врача своим друзьям.</label></td>
                                    </tr>
                                    <tr>
                                        <td><label><input type="radio" id="RatingValue1" class="height_buttom" name="Doctor_rating" value="я не буду рекомендовать врача">
                                            Я бы не порекомендовал этого врача своим друзьям.</label></td>
                                    </tr>
                                    </tbody></table><br/>


                                <div class="smalltext"><label for="Понравилось ли вам обслуживание перед приемом врача?"> Понравилось ли вам обслуживание перед приемом врача? </label></div>
                                <select id="dropdownRatingValue2" name="Dropbox1" tabindex="5">
                                    <option selected="selected" value="не выбрано">не выбрано</option>
                                    <option value="очень понравилось">очень понравилось</option>
                                    <option value="достаточно хорошо">достаточно хорошо</option>
                                    <option value="не знаю">не знаю</option>
                                    <option value="не очень понравилось">не очень понравилось</option>
                                    <option value="очень не понравилось">очень не понравилось</option>
                                </select>



                                <div class="smalltext"><label class="control-label right-label right-top" for="Персонал клиники общался с вами вежливо и внимательно?"> Персонал клиники общался с вами вежливо и внимательно? </label></div>
                                <select id="dropdownRatingValue3" name="Dropbox2" tabindex="6">
                                    <option selected="selected" value="не выбрано">не выбрано</option>
                                    <option value="да, все время">да, все время</option>
                                    <option value="в большинстве ситуаций">в большинстве ситуаций</option>
                                    <option value="иногда">иногда</option>
                                    <option value="редко">редко</option>
                                    <option value="никогда">никогда</option>
                                </select>
                            </div>
                            <div class="span7">
                                <div class="smalltext"><label class="control-label right-label" for="Понравилось ли вам"> Понравилось ли вам участие врача в принятии решений касательно вашего здоровья? </label></div>
                                <select id="dropdownRatingValue4" name="Dropbox3" tabindex="7">
                                    <option selected="selected" value="не выбрано">не выбрано</option>
                                    <option value="очень понравилось">очень понравилось</option>
                                    <option value="достаточно хорошо">достаточно хорошо</option>
                                    <option value="не знаю">не знаю</option>
                                    <option value="не очень понравилось">не очень понравилось</option>
                                    <option value="очень не понравилось">очень не понравилось</option>
                                </select>


                                <div class="smalltext"><label class="control-label right-label" for="How_Found">Вы остались довольны информацией о конечной стоимости вашего лечения?</label></div>
                                <select id="dropdownRatingValue5" name="Dropbox4" tabindex="8">
                                    <option selected="selected" value="не выбрано">не выбрано</option>
                                    <option value="очень понравилось">очень понравилось</option>
                                    <option value="достаточно хорошо">достаточно хорошо</option>
                                    <option value="не знаю">не знаю</option>
                                    <option value="не очень понравилось">не очень понравилось</option>
                                    <option value="очень не понравилось">очень не понравилось</option>
                                </select>

                                <div class="smalltext"><label class="control-label feedbacklable right-label" for="How_Found"> Как вы оцениваете результаты вашего лечения? </label></div>
                                <select id="dropdownRatingValue6" name="Dropbox5" tabindex="9">
                                    <option selected="selected" value="не выбрано">не выбрано</option>
                                    <option value="очень понравилось">очень понравилось</option>
                                    <option value="достаточно хорошо">достаточно хорошо</option>
                                    <option value="не знаю">не знаю</option>
                                    <option value="не очень понравилось">не очень понравилось</option>
                                    <option value="очень не понравилось">очень не понравилось</option>
                                </select>
                            </div>
                            <div class="span12">
                                <div class="smalltext"><label class="control-label feedbacklable" for="Что вам понравилось?">Что вам понравилось?</label></div>
                                <textarea name="What_like" onfocus="if(document.form_feedback.textLiked.value=='введите сообщение'){ document.form_feedback.textLiked.value='' }"
                                          onblur="if(document.form_feedback.textLiked.value==''){ document.form_feedback.textLiked.value='введите сообщение' }"
                                          onkeyup="limiter();" cols="70" rows="5" id="textLiked" columns="20"
                                          tabindex="10" maxlength="2000">введите сообщение</textarea>
                                <br>

                                <input type="text" name="limit" size="1" class="input" readonly="" value="2000">
                                максимальное количество 2000 символов


                                <div class="smalltext"><label class="control-label feedbacklable" for="Что можно улучшить?">Что можно улучшить?</label></div>
                                <textarea name="What_get_better" cols="70" rows="5" id="textCouldBeImproved" columns="20"
                                          onfocus="if(document.form_feedback.textCouldBeImproved.value=='введите сообщение'){ document.form_feedback.textCouldBeImproved.value='' }"
                                          onkeyup="limiter1();" onblur="if(document.form_feedback.textCouldBeImproved.value==''){ document.form_feedback.textCouldBeImproved.value='введите сообщение' }"
                                          tabindex="11" maxlength="2000">введите сообщение</textarea>
                                <br/>

                                <input type="text" name="limit1" size="1" class="input" readonly="" value="2000">
                                максимальное количество 2000 символов

                                <div class="smalltext"><label class="control-label feedbacklable" for="textOneLine"><strong>Пожалуйста, обобщите ваше мнение о клинике одной фразой *</strong></label></div>
                                <input type="text" name="One_word" class="input_result" id="textOneLine" value="введите сообщение" onkeyup="limiter3();"
                                       onfocus="if(document.form_feedback.textOneLine.value=='введите сообщение'){ document.form_feedback.textOneLine.value='' }"
                                       onblur="if(document.form_feedback.textOneLine.value==''){ document.form_feedback.textOneLine.value='введите сообщение' }" size="75" maxlength="80" tabindex="13">
                                <br/>

                                <input type="text" name="limit3" size="1" class="input" readonly="" value="80">
                                максимальное количество 80 символов

                                <div class="smalltext">Зашита от спама, введите, пожалуйста, символы в пустое поле ниже.</div>
                                <div class="captch-box">

                                    <span><label for="txtCaptcha_feedback" class="verify-txt"><strong>Проверка *</strong> </label></span>
                                        <input type="text" class="sm-input" id="txtCaptcha_feedback" maxlength="4" name="captcha_code" required="" tabindex="14"><br/>
                                    <img src="form/captcha.php" id="imgCaptcha_feedback" class="captcha-img" alt="Captcha">
                                        <input type="submit" name="req" value="Отправить" class="btn" onclick="return checkFields_feedback()" tabindex="15">

                                </div>

                            </div>
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


