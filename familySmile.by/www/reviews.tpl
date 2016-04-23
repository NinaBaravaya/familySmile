
        <section>
            <div class="first">

                <div class="text_goal">
                    <h2>Отзывы пациентов</h2>
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

            <div class="second_reviews">
                <div class="replace_review"><a href="replace_review.php">оставить отзыв</a></div>

                    {REVIEWS_PATIENT}

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
                        <a href="reviews.tpl">ОТЗЫВЫ ПАЦИЕНТОВ</a>
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

