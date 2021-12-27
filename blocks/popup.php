

<div id="popup" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_title">Доставка</div>
                    <div class="popup_text">
                        Доставка осуществляется только в пределах зоны доставки (см.карту). Время приёма заказов на доставку: с 10:00 до 23:00 (за исключением КСК, где заказы принимаются с 11:00 до 22:00). Мы работаем без перерывов и выходных.
                        Телефон доставки: 32-30-30.
                    </div>
                </div>
            </div>
        </div>

        <div id="popup_map" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_title">Мы на карте</div>
                    <div class="popup_text">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.908296224861!2d113.50320431598567!3d52.02676828041618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5dcbcaccbcd9e107%3A0x4c00406a83de8b32!2z0JrQvtC80L_RjNGO0YLQtdGAINCf0LvRjtGB!5e0!3m2!1sru!2sru!4v1639827054620!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup_order" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_title">Оформление заказа</div>
                    <div class="popup_text">
                    <i class=" js_close-popup"></i>
		<div class='js_error'></div>
		<input type="hidden" name="product-id">
		<input type="text" name="fio" placeholder="Ваше имя">
		<input type="text" name="phone" placeholder="Телефон">
		<input type="text" name="email" placeholder="e-mail">
		<textarea placeholder="Комментарий" name="comment"></textarea>
		<button class="js_send">Отправить</button>
                    </div>
                </div>
            </div>
        </div>




        <div id="popup_bd_add" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddTovar.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Процессор</p>
                        <input class="edit_login" type="text" name="proc">
                        <p>Видеокарта</p>
                        <input class="edit_name edit_login" type="text" name="video">
                        <p>ОЗУ</p>
                        <input class="edit_name edit_login" type="text" name="ozu">
                        <p>ОС</p>
                        <input class="edit_name edit_login" type="text" name="oc">
                        <p>Накопитель данных</p>
                        <input class="edit_name edit_login" type="text" name="hddssd">
                        <p>Цена компьютера</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddnout" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddNout.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Процессор</p>
                        <input class="edit_login" type="text" name="proc">
                        <p>Видеокарта</p>
                        <input class="edit_name edit_login" type="text" name="video">
                        <p>ОЗУ</p>
                        <input class="edit_name edit_login" type="text" name="ozu">
                        <p>ОС</p>
                        <input class="edit_name edit_login" type="text" name="oc">
                        <p>Накопитель данных</p>
                        <input class="edit_name edit_login" type="text" name="hddssd">
                        <p>Экран</p>
                        <input class="edit_name edit_login" type="text" name="screen">
                        <p>Цена компьютера</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddproc" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#popupaddnout" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddProc.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Сокет</p>
                        <input class="edit_login" type="text" name="socket">
                        <p>Кол-во ядер</p>
                        <input class="edit_name edit_login" type="text" name="count_yader">
                        <p>Кол-во потоков</p>
                        <input class="edit_name edit_login" type="text" name="count_potok">
                        <p>Производитель</p>
                        <input class="edit_name edit_login" type="text" name="made">
                        <p>Кэш</p>
                        <input class="edit_name edit_login" type="text" name="cache">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddmat" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddMat.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Сокет</p>
                        <input class="edit_login" type="text" name="socket">
                        <p>Чипсет</p>
                        <input class="edit_name edit_login" type="text" name="chipset">
                        <p>ОЗУ</p>
                        <input class="edit_name edit_login" type="text" name="ozu">
                        <p>Аудио</p>
                        <input class="edit_name edit_login" type="text" name="audio">
                        <p>Форм-фактор</p>
                        <input class="edit_name edit_login" type="text" name="form_factor">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddvideo" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddVideo.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Объем видеопамяти</p>
                        <input class="edit_login" type="text" name="gddr">
                        <p>Разрядность шины памяти</p>
                        <input class="edit_name edit_login" type="text" name="razryd">
                        <p>Производитель</p>
                        <input class="edit_name edit_login" type="text" name="made">
                        <p>Энергопотребление</p>
                        <input class="edit_name edit_login" type="text" name="volt">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddozu" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddOzu.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Объем памяти</p>
                        <input class="edit_login" type="text" name="ram">
                        <p>Тактовая частота</p>
                        <input class="edit_name edit_login" type="text" name="tact">
                        <p>Производитель</p>
                        <input class="edit_name edit_login" type="text" name="made">
                        <p>Тайминги</p>
                        <input class="edit_name edit_login" type="text" name="time">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddblockvolt" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddBlockVolt.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Мощность</p>
                        <input class="edit_name edit_login" type="text" name="volt">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddhddssd" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddHddSsd.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Объем</p>
                        <input class="edit_login" type="text" name="razmer">
                        <p>Чтение</p>
                        <input class="edit_name edit_login" type="text" name="readd">
                        <p>Запись</p>
                        <input class="edit_name edit_login" type="text" name="writee">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddholod" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddHolod.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Основание</p>
                        <input class="edit_login" type="text" name="material">
                        <p>Скорость вращения</p>
                        <input class="edit_name edit_login" type="text" name="speed">
                        <p>Уровень шума</p>
                        <input class="edit_name edit_login" type="text" name="shum">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddmonitor" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddMonitor.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Экран</p>
                        <input class="edit_name edit_login" type="text" name="screen">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddmouse" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddMouse.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Разрешение датчика</p>
                        <input class="edit_login" type="text" name="datch">
                        <p>Сенсор</p>
                        <input class="edit_name edit_login" type="text" name="sensor">
                        <p>Количество кнопок</p>
                        <input class="edit_name edit_login" type="text" name="count">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddkeyboard" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddKeyboard.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Тип клавиатуры</p>
                        <input class="edit_login" type="text" name="types">
                        <p>Цвет подсветки клавиш</p>
                        <input class="edit_name edit_login" type="text" name="RGB">
                        <p>Интерфейс подключения</p>
                        <input class="edit_name edit_login" type="text" name="interface">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popupaddaudio" class="popup">
        <div class="overlay js_overlay"></div>
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_text">
                    <form action="AddAudio.php" method="post">
                        <p>Название</p>
                        <input class="edit_name edit_login" type="text" name="name">
                        <p>Формат звуковой схемы</p>
                        <input class="edit_login" type="text" name="format">
                        <p>Тип конструкции</p>
                        <input class="edit_name edit_login" type="text" name="types">
                        <p>Частота звука</p>
                        <input class="edit_name edit_login" type="text" name="mg">
                        <p>Цена</p>
                        <input class="edit_login" type="text" name="price">
                        <button class="registration_bt" type="submit">Добавить товар</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup_login" class="popup">
            <div class="popup_body">
                <div class="popup_content">
                    <a href="#" class="popup_close">X</a>
                    <div class="popup_title">Войти</div>
                    <div class="popup_text">
                        <form action="/blocks/authorization.php" method="post"><p>Логин</p>
                        <input class="edit_name edit_login" name="login" type="text">
                        <p>Пароль</p>
                        <input class="edit_login" name="password" type="password">
                        <button class="authorization" type="submit">Войти</button>
                    </form> 
                </div>
            </div>
        </div>

        
        

        

        


