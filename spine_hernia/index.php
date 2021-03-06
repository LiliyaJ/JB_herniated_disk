<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="img/png" href="img/favicon.png"> 
        <link rel="stylesheet" href="css/normalize.css">      
        <link rel="stylesheet"  media="screen and (max-width: 699px)" href="css/style-small.css">
        <link rel="stylesheet" media="screen and (min-width: 700px) and (max-width: 1023px)" href="css/style-middle-small.css">
        <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1299px)" href="css/style-middle-large.css">
        <link rel="stylesheet" media="screen and (min-width: 1300px)" href="css/style-large.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <title>Лечение межпозвоночной грыжи в Германии. Johannesbad Fachklinik</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <div class="logo-box">
                        <a href="https://www.johannesbad.ru/Nachalnaya-stranitsa.aspx" target="_blank"><img src="img/logo_wort.png" alt="Johannesbad Fachklinik logo"></a>
                    </div>
                    <!--Menu for less then 1000 px-->
                    <div class="burger-main-nav-box">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul class="main-nav">
                            <li><a href="https://www.johannesbad.ru/O-klinike.aspx" target="_blank">О клинике</a></li>
                            <li><a href="https://www.johannesbad.ru/Ortopedicheskoye-lecheniye.aspx" target="_blank">Лечение</a></li>
                            <li><a href="https://www.johannesbad.ru/Therme-fitness-wellness.aspx" target="_blank">Термальные источники</a></li>
                            <li><a href="#container-contact">Контакт</a></li>
                        </ul> 
                    </div> 
                    <!--Menu for min 1000 px-->
                    <div class="main-nav-box">
                    <ul class="main-nav">
                        <li><a href="https://www.johannesbad.ru/O-klinike.aspx" target="_blank">О клинике</a></li>
                        <li><a href="https://www.johannesbad.ru/Ortopedicheskoye-lecheniye.aspx" target="_blank">Лечение</a></li>
                        <li><a href="https://www.johannesbad.ru/Therme-fitness-wellness.aspx" target="_blank">Термальные источники</a></li>
                        <li><a href="#container-contact">Контакт</a></li>
                    </ul> 
                    </div>   
                </div>
            </nav>

            <section class="container">
                <div class="container-two" id="form">
                 <?php
                    if($_GET['success'] == 1){
                    echo "<div class=\"form-messages success\">
                                Спасибо! Ваш запрос отправлен. Наши менеджеры свяжутся с Вами в ближайшее время.
                            </div>";
                    }
                    
                    if($_GET['success'] == -1){
                        echo "<div class=\"form-messages error\">
                            Что-то пошло не так. Попробуйте заполнить форму еще раз.
                        </div>";
                    }
                    ?>
                    <div class="hero-text-box small-text-box">
                    
                        <h1>Лечение межпозвоночной грыжи в специализированной клинике Johannesbad в Германии<span>.</span></h1>
                        <h5>Индивидуальные программы лечения</h5>
                        <div class="btn-div">
                            <a class="btn" href="#">Получить бесплатную консультацию</a>
                        </div>
                    </div>
                   
                </div>
                <div class="hero">
                    <img src="img/hernia_01-min.png" alt="Врач дает консультацию по лечению позвоночника">
                </div>
            
            </section>
        </header>
        <section class="simptomatic">
            <div class="headings">
                <h3>Позаботьтесь о своем здоровье</h3>
                <h2>Не откладывайте лечение.</h2>
                <h4>Боль в спине и шейном отделе позвоночника сильно осложняет жизнь: мешает работе, не дает совершать самые обычные привычные действия, делает невозможным нормальный отдых. И если своевременно не заняться лечением, то последствия могут быть очень серьезными. Сильно запущенная грыжа позвоночника может в лучшем случае вести к осложнениям, а в худшем - к хроническим заболевания и даже параличу.</h4>
            </div>
            <div class="container-simptomatic">
                <div class="hexagon one">
                    <p>Колющие боли<br>в спине</p>
                </div>
                <div class="hexagon two">
                    <p>Боли от низа <br> спины до стопы</p>
                </div>
                <div class="hexagon three">
                    <p>Боли в шее,<br> отдающие в руки</p>
                </div>
                <div class="hexagon four">
                    <p>Слабость <br>в ногах</p>
                </div>
                <div class="hexagon five">
                    <p>Онемения <br>в спине</p>
                </div>
                <div class="hexagon six">
                    <p>Усиление боли<br> при движениях</p>
                </div>
                <div class="hexagon seven">
                    <p>Ощущение<br> холода<br> в конечностях</p>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="headings">
                <h3>Преимущества лечения у нас</h3>
                <h2>Почувствуйте разницу.</h2>
                <h5>Наши гарантии основаны на многолетнем опыте, высоком профессионализме и немецком качестве.</h5>
            </div>
            <div class="container-benefits">
                <div class="box box-one">
                    <h4>Немецкая медицина одна из лучших в мире.</h4>
                </div>
                <div class="box box-two">
                    <h4>Комфортабельный отель вместо больничных палат.</h4>
                </div>
                <div class="box box-three">
                    <h4>Крупнейшие термальные источники.</h4>
                </div>
            </div>
        </section>
        <section class="review">
            <div class="container">
                <div class="box-review">
                        <h3>О нас говорят</h3>
                        <h2>Звезда телешоу "Что? Где? Когда?" <br>Алексей Блинов.</h2>
                        <h5>Воспаление ахиллового сухожилия. <br>Проведена операция и реабилитация.</h5>
                        <blockquote>&quot;Все прошло как по маслу! Признаться, я очень волновался перед поездкой в Германию. Идея оперироваться в чужой стране иностранными врачами была не очень привлекательной. Как я их пойму? Как они меня поймут? Но волновался я напрасно. Мне очень понравилось, что профессиональный медицинский переводчик встретила меня прямо в аэропорту и потом сопровождала на всех встречах! Я получил лучшее медицинское обслуживание. Немецкие врачи очень профессиональны и внимательны. Я остался доволен врачами, операцией и последующей реабилитацией. Справиться с моей травмой мне очень помогли не только врачи, но и медсестры, терапевты, дружественная атмосфера и, конечно, моя переводчица. Спасибо вам большое!&quot;"</blockquote>
                        <a class="btn" href="#review">Получить бесплатную консультацию</a>
                </div>
                <div class="box-review">
                    <img src="img/blinov.png" alt="Алексей Блинов рассказывает о своем лечении у нас">
                </div>
            </div>
        </section>
        <section class="treatment">
                <h3>Три шага к здоровой спине</h3>
                <h2>Как проходит лечение у нас?</h2>
                <div class="container-treatment">
                    <div class="box-treatment">
                        <div class="container-treatment-two">
                            <img src="img/med01.png">
                            <h5>Первичное медицинское обследование.</h5>
                        </div>
                        <p>При поступлении к нам пациент проходит тщательное медицинское обследование, которое включает в себя:</p>
                        <ul class="bullets-treatment clearfix">
                            <li>физикальный осмотр;</li>
                            <li>подробная консультация врача;</li>
                            <li>контрольные измерения;</li>
                            <li>обсуждение истории болезни;</li>
                            <li>измерение плотности костей;</li>
                            <li>рентгенологическое исследование;</li>
                            <li>анализ походки;</li>
                            <li>изокинетическое тестирование мышц;</li>
                            <li>другие необходимые обследования.</li>
                        </ul>
                    </div>
                    <div class = "arrow-treatment">
                            <img src="img/arrow.png" alt="затем">
                    </div>
                    <div class="box-treatment">
                        <div class="container-treatment-two">
                            <img src="img/med03.png">
                            <h5>Разработка индивидуальной программы лечения.</h5>
                        </div>
                        <p>Исходя из данных обследования, составляется целенаправленный терапевтический план, включающий ежедневные лечебные процедуры:</p>
                        <ul class="bullets-treatment clearfix">
                            <li>физиотерапия;</li>
                            <li>лечебная гимнастика;</li>
                            <li>медицинский тренинг;</li>
                            <li>мануальная терапия;</li>
                            <li>эрготерапия;</li>
                            <li>массажи;</li>
                            <li>мануальный лимфодренаж;</li>
                            <li>ударно-волновая терапия;</li>
                            <li>внутрисуставные инъекции;</li>
                            <li>и другие процедуры.</li>
                        </ul>     
                    </div>
                    <div class = "arrow-treatment">
                            <img src="img/arrow.png" alt="затем">
                        </div>
                    <div class="box-treatment">
                        <div class="container-treatment-two">
                            <img src="img/med02.png">
                        <h5>Комплексный подход к лечению.</h5>
                        </div>
                        <p>Уникальность нашего лечения состоит в комплексном подходе к проблеме. Основываясь на многолетнем опыте работы, мы разработали уникальный подход, включающий в себя:</p>
                        <ul class="bullets-treatment clearfix">
                            <li>лечебные процедуры;</li>
                            <li>физические упражнения;</li>
                            <li>комплекс массажей;</li>
                            <li>терапия;</li>
                            <li>лечебная гимнастика;</li>
                            <li>комплекс упражнений по расслаблению спины;</li>
                            <li>работа с эмоциональным состоянием пациента.</li>
                        </ul>
                </div>
            </div>
        </section>
        <section class="push push-top">
            <div class="container-contact">
                <div class="headings">
                    <h3>Позаботьтесь о своем здоровье</h3>
                    <h2>Просто свяжитесь с нами.</h2>
                    <h4>Наши квалифицированные специалисты проконсультируют вас, подберут программу и сделают предварительный расчет ее стоимости</h4>
                </div>
                <a class="btn" href="#push">Получить бесплатную консультацию</a>
            </div>
        </section>
        <section class="interior" id="clinic">
            <div class="headings">
                <h3>Ваше здоровье - это наша жизнь</h3>
                <h2>Наша клиника.</h2>
                <h4>Йоханнесбад - это специализарованная клиника, но наши пациенты чувствуют себя здесь не как в больнице, а как в хорошем отеле со всеми удобствами и комфортом.</h4>
            </div>
            <div class="simpleSlides">
                <img class="slides animate-left" src="img/geb01.jpg" alt="Главный вход в клинику">
                <img class="slides animate-left" src="img/Suite.jpg" alt="Фото номера в нашей клинике">
                <img class="slides animate-left" src="img/wc.jpg" alt="Фото номера в нашей клинике">
                <img class="slides animate-left" src="img/Buefett.jpg" alt="Ресторан и кухня">
                <img class="slides animate-left" src="img/doctors.jpg" alt="Наши врачи">
                <img class="slides animate-left" src="img/massage.jpg" alt="Массажный кабинет">
                <img class="slides animate-left" src="img/gymnastik.jpg" alt="Групповое занятие гимнастикой">
                <img class="slides animate-left" src="img/geb02.jpg" alt="Вид на здание и термальные бассейны">
                <img class="slides animate-left" src="img/wasser_gym.jpg" alt="Индивидуальные заняние водной гимнастикой">
                <img class="slides animate-left" src="img/cafe.jpg" alt="Кафе нашей клиники">
            </div>
            <div class="interior-text" id="container-contact">
                <p>Клиника находится в тихом баварском городке Бад Фюссен, Германия. Вода из-под крана альпийская и сертифицирована, как полезная питьевая вода. В непосредственной близости расположены города: Мюнхен, Пассау, Линц и Зальцбург. К вашим услугам комфортные, полностью оборудованные всем необходимым номера: балкон с живописным видом, отдельная ванная комната, кресло для релаксации, письменный стол и стулья, телевизор со спутниковыми каналами, бесплатный и неограниченный Wi-Fi, телефон, холодильник, сейф. Завтрак, обед и ужин готовятся из самых свежих продуктов местных поставщиков поварами нашего ресторана. Наша цель - не просто лечить тело, но создать благоприятную атмосферу, чтобы добиться внутренней гармонии. Ведь именно она - залог здоровья! Вы можете полностью расслабиться в наших профессиональных и заботливых руках.</p>
            </div>
        </section>
        <section class="contact">
            <div class="container-contact">
                <h3>Вам необходимо больше информации?</h3>
                <h2>Мы ответим на ваши вопросы.</h2>
                <h4>Просто позвоните нам по телефону <p class="phone">8-800-201-1872</p></h4>
            </div>
        </section>
        <section class="therme">
            <div class="container">
                <div class="box-review">
                    <h3>Крупнейшие в Европе горячие источники</h3>
                    <h2>Целебная сила термальных источников.</h2>
                    <h5>Вулканические ванны, крытый бассейн с волнами, массажные ванны, гидродинамический канал.</h5>
                    <div class="therme-benefits">
                        <div class="icons">
                           <img src="img/icon_aid01.png">
                        </div>
                        <div class="therme-text">
                            <h5>Болеутоляющий эффект</h5>
                            <p>Сера воздействует непосредственно на больные зоны организма, оказывая болеутоляющий эффект.</p>
                        </div>
                        <div class="icons">
                            <img src="img/icon_smily.png">
                        </div>
                        <div class="therme-text">
                            <h5>Снятие нагрузки</h5>
                            <p>Обогащенная серой вода снимает нагрузку с суставов, связок, позвоночника и мышц, позволяя отрабатывать различные движения при облегченном весе тела.</p>
                        </div>
                        <div class="icons">
                            <img src="img/icon_sun.png">
                        </div>
                        <div class="therme-text">
                            <h5>Благоприятное воздействие</h5>
                            <p>Поддержка воды благотворно влияет на дыхательную систему, кровообращение и обмен веществ.</p>
                        </div>
                        <div class="icons">
                            <img src="img/icon_care.png">
                        </div>
                        <div class="therme-text">
                            <h5>Расслабление</h5>
                            <p>Благодаря температуре воды, близкой к температуре тела, мускулатура и нервная система расслабляются.</p>
                        </div>
                        <div class="icons">
                            <img src="img/icon_reach.png">
                        </div>
                        <div class="therme-text">
                            <h5>Доступно прямо из номера</h5>
                            <p>Находясь в нашей клинике, Вы можете пройти к горячим источникам прямо из вашей комнаты в банном халате и тапочках.</p>
                        </div> 
                    </div>
                    <a class="btn" href="#therme">Получить бесплатную консультацию</a>
                </div>
                <div class="box-review">
                   
                </div>
            </div>
        </section>
        <section class="feedback">
                <h3>@Johannesbadru</h3>
                <h2>Пациенты становятся нашими друзьями.</h2>
            <div class="feedback-container">
                <div class="feedback-box">
                    <blockquote>"Огромное спасибо врачам и терапевтам клиники! Отдельное спасибо доктору Крюкханс! Несколько лет мучился болями в спине в районе между лопатками и поясницей. Никто толком не мог помочь. После первого приема у доктора Крюкханс стало понятно, что она знает свое дело. Если честно, был немного удивлен, как здесь проходит диагностика. Несколько часов подряд меня просили сесть, встать, пройтись, лечь, подключали аппараты, делали снимки, 3D-обследования, обсуждали, снова осматривали :) И все это делала команда специалистов под руководством моего лечащего врача. Очень хороший подход! Боли в спине, кстати, прошли."</blockquote>
                    <div class="name-feedback">
                        <img src="img/bewertung03.png" alt="Пациент Максим">
                        <div class="name-feedback-box">
                            <p>@Максим, 37 лет, Москва <br>Диагноз: болевой синдром позвоночника</p>
                        </div>
                    </div>
                </div>
                <div class="feedback-box">
                    <blockquote>"Девочки, мы с мужем хотим выразить вам нашу безмерную благодарность! Это очень здорово, что у вашей клиники есть такой отдел, как вы! Все так хорошо организовано для русских пациентов. Передавайте наш теплый привет Олене и Диане, они очень здорово переводили и поддерживали нас!
                            С теплым приветом из холодной Москвы :)"</blockquote>
                    <div class="name-feedback">
                        <img src="img/bewertung04.png" alt="Пациента Ирина с мужем">
                        <div class="name-feedback-box">
                            <p>@Ирина с мужем Игорем, Москва <br>Диагноз: межпозвоночная грыжа</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="simptomatic simptomatic-bottom">
            <div class="headings">
                <h3>Мы всегда поддержим вас</h3>
                <h2>Помощь в огранизации приезда.</h2>
                <h4>Мы окажем необходимую вам поддержку. Поможем пройти все формальности с посольством. Сориентируем в клинике. Предоставим квалифицированного медицинского переводчика и многое другое.</h4>
            </div>
            <div class="container-simptomatic">
                <div class="hexagon">
                    <p>Приглашение<br>Виза</p>
                </div>
                <div class="hexagon">
                    <p>Перелет<br>Трансфер</p>
                </div>
                <div class="hexagon">
                    <p>Организация<br> досуга</p>
                </div>
                <div class="hexagon">
                    <p>Медицинский<br> переводчик</p>
                </div>
                <div class="hexagon">
                    <p>Путешествия<br> Новые места</p>
                </div>
                <div class="hexagon">
                    <p>Шопинг<br> ассистент</p>
                </div>
                <div class="hexagon">
                    <p>СПА<br>Салон красоты</p>
                </div>
            </div>
        </section>
        <section class="push">
            <div class="container-contact headings">
                <h3>Позаботьтесь о своем здоровье</h3>
                <h2>Просто свяжитесь с нами.</h2>
                <h4>Наши квалифицированные специалисты проконсультируют вас, подберут программу и сделают предварительный расчет ее стоимости</h4>
                <a class="btn" href="#push">Получить бесплатную консультацию</a>
            </div>
        </section>

        <footer>
            <div class="container-footer">
                <div class="logo-footer">
                        <a href="https://www.johannesbad.ru/Nachalnaya-stranitsa.aspx" target="_blank"><img src="img/Logo_white.png" alt="Johannesbad Fachklinik logo"></a>
                </div>
                <div class="box-footer">
                    <h5>Узнайте больше</h5>
                    <div class="icons-footer">
                        <a href="https://www.facebook.com/johannesbadru" target="_blank"><img src="img/icons_fb.png" alt="Мы на фейсбуке"></a>
                        <a href="https://www.johannesbad.ru/" target="_blank"><img src="img/icons_website.png" alt="Посетите наш сайт"></a>
                    </div>
                </div>
                <div class="box-footer">
                    <h5>Свяжитесь с нами</h5>
                    <p>8-800-201-1872</p>
                    <p>lechenie@johannesbad.com</p>
                </div>
                <div class="box-footer">
                    <h5>Правовая информация</h5>
                    <p>®Johannesbad Fachklinik Bad Füssing 2019</p>
                    <p>Johannesbadstraße 2, D-94072 Bad Füssing</p>
                    <a href="https://www.johannesbad.ru/Zashchita-dannykh.aspx"><p>Защита данных</p></a>
                    <a href="https://www.johannesbad.ru/Rekvizity.aspx"><p>Реквизиты</p></a>
                </div>
            </div>
        </footer>
        
        <div class="popup">
            <div class="container-form">
               

                <h2>Мы ответим на все ваши вопросы</h2>
                <h4>Вы можете позвонить нам по телефону <p class="phone">8-800-201-1872</p><br> или отправить нам свои контакты и мы свяжемся с вами в самое ближайшее время.</h4>
                <div class="box-form">
                    <form method="post" action="mailer.php" class="contact-form">
                        <div class="box-form">
                            <div class="span-1-of-3">
                                <label for="name">Ваше имя:</label>
                            </div>
                            <div class="span-2-of-3">  
                                <input type="text" class="form-input name" id="name" placeholder="Обязательное поле">
                            </div>
                        </div>

                        <div class="box-form">
                            <div class="span-1-of-3">
                                <label for="email">Ваш email:</label>
                            </div>
                            <div class="col span-2-of-3">  
                                <input type="email" class="form-input email" id="email" placeholder="Обязательное поле" required>
                            </div>
                        </div>
                   
                        <div class="box-form">
                            <div class="span-1-of-3">
                                <label for="tel">Ваш телефон:</label>
                            </div>
                            <div class="span-2-of-3">  
                                <input type="tel" class="form-input tel" id="tel" placeholder="Обязательное поле" required>
                            </div>
                        </div>
                       
                        <div class="box-form">
                            <div class="col span-1-of-3">
                                <label for="message">Ваше сообщение:</label>
                            </div>
                            <div class="span-2-of-3">  
                                <textarea name="message" id="message" placeholder="Здесь Вы можете оставить свое сообщение"></textarea>

                            </div>
                        </div>
                            
                        <div class="box-form">
                            <div class="span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="span-2-of-3">  
                                <input type="submit" value="Отправить запрос">
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
                <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130089769-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130089769-1');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(51352003, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/51352003" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->

        <script src="js/app.js"></script>
    </body>
</html>