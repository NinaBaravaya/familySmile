  <section>
            <div class="first_gl">
                <div class="slider">
                    <ul>

                        {SLIDER}
                    </ul>
                </div>
            </div>
            <div class="second">
                <table border="1">
                    <p class="fs_text">Узнайте, почему нужно <br/><span class="text">записаться на прием</span> именно к нам!</p>
                    <tr>
                        <td>
                            <img src="img_glavnaya/icon/1.png" width="77" height="73" alt="семейная стоматология" title="семейная стоматология">
                            <p class="zag">семейная стоматология</p>
                            <p>Взрослых мы лечим как детей, а детей, как взрослых! Мы гарантируем внимание и высокий уровень обслуживания каждому!</p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/2.png" width="73" height="73" alt="передовые технологии" title="передовые технологии">
                            <p class="zag">передовые технологии</p>
                            <p>Мы применяем европейское оборудование: микроскоп, лазер, обследование на 3D-томографе, CAD/CAM технологии.</p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/3.png" width="90" height="73" alt="консультация пародонтолога" title="консультация пародонтолога">
                            <p class="zag">консультация пародонтолога</p>
                            <p>Его основная задача - научить человека правильно ухаживать за своими зубами и полостью рта, создав для этого все условия <p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/4.png" width="73" height="73" alt="безопасное отбеливание" title="безопасное отбеливание">
                            <p class="zag">безопасное отбеливание</p>
                            <p>
                                Если вы мечтаете о белоснежной улыбке, то вам понадобится всего один день и зубы станут белее на восемь тонов!
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img_glavnaya/icon/5.png" width="73" height="73" alt="современный наркоз" title="современный наркоз">
                            <p class="zag">современный наркоз</p>
                            <p>Мы используем: медицинскую закись азота, ксенон и севоран, которые обеспечивают полное отсуствие боли и дискомфорта.</p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/6.png" width="74" height="73" alt="гибкая система оплаты" title="гибкая система оплаты">
                            <p class="zag">гибкая система оплаты</p>
                            <p>Варианты оплаты услуг: наличными и банковской картой, услуга "семейный депозит", расчет по страховке и т.д.</p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/7.png" width="64" height="73" alt="полный спектр услуг" title="полный спектр услуг">
                            <p class="zag">полный спектр услуг</p>
                            <p>Мы предоставляем следующие виды услуг: терапия, ортопедия, хирургия,десткая стоматология, профилактика, услуги ортодонта</p>
                        </td>
                        <td>
                            <img src="img_glavnaya/icon/8.png" width="53" height="73" alt="виртуозы стоматологии" title="виртуозы стоматологии">
                            <p class="zag">виртуозы стоматологии</p>
                            <p>Наша команда состоит из  высоко квалифицированных специалистов, для которых стоматология не просто профессия, а дело жизни.
                            </p>
                        </td>
                    </tr>
                </table>
                <a href="#modal"><button name="second" onclick="AppointmentClicked()">Заказать звонок</button></a>
                <div data-remodal-id="modal" role="dialog" aria-describedby="modal1Desc">
                    <div class="remodalPadding">
                        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                        <form id="form" name="form_backup">
                        </form>
                    </div>
                </div>
                <div id="form_backup">
                    <h2>Запись на консультацию</h2>
                    <p>Оставьте свой вопрос и контактные данные и наш администратор свяжеться с вами в течение 10 минут </p>
                    <input type="text" class="putName" id="name" name="name" value="Ваше имя" onfocus="if(trim(document.form_backup.name.value)=='Ваше имя'){ document.form_backup.name.value='' }"
                           onblur="if(trim(document.form_backup.name.value)==''){ document.form_backup.name.value='Ваше имя' }" required maxlength="15">
                    <input type="text" class="putName" id="phone" name="phone" value="Введите номер телефона" onfocus="if(trim(document.form_backup.phone.value)=='Введите номер телефона'){ document.form_backup.phone.value='' }"
                           onblur="if(trim(document.form_backup.phone.value)==''){ document.form_backup.phone.value='Введите номер телефона' }" required maxlength="15">
                    <input type="submit" name="submit" class="btn" value="Отправить">
                    <input type="hidden" name="formData" value="Заявка с сайта">
                </div>
            </div>
            <div class="uslugi">
                <br/>
                <p class="fs_text">Услуги стоматологической клиники</p>
                <p class="fs_text zag_2">Своевременное обращение к стоматологу снижает риск осложнений на 87%</p>
                <div class="hotbutton_gl">
                    <ul>
                        {USLUGI}
                    </ul>
                    <div class="link_usl"><a href="uslugi.php" title="все услуги">все услуги</a></div>
                </div>
            </div>
            <p class="fs_text size2">Специалисты <img src="img_glavnaya/text_fs.png" width="136" height="26" alt="familySmile" title="familySmile"> быстро устранят проблему и подскажут,<br/>
                как избежать ее в будущем</p>
            <div class="reviews">
             <span class="quote"><img src="images/qoute-left.png" alt="Qoute" title="Qoute" class="qoute-left">
                <span class="zero"></span>
                 <img src="images/qoute-right.png" alt="Qoute" title="Qoute" class="qoute-right">
             </span>
                <div id="slider">
                    <h2>
                        <span id="fleche_gauche" class="fleche" onClick="prevImage()" ></span>
                        <a href="reviews.php">ОТЗЫВЫ ПАЦИЕНТОВ</a>
                        <span id="fleche_droite" class="fleche" onClick="nextImage()" ></span>
                    </h2>
                    <div id="mask">
                        <ul id="image_container">
                            {REVIEWS_SLIDER}
                        </ul>
                    </div>
                </div>
            </div>
         <a href="#modal"><button name="third" onclick="AppointmentClicked()">Заказать звонок</button></a>

