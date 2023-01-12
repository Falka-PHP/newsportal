<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="main">NewsPortal</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-0">
                <li class="nav-item">
                    <a class="nav-link" href="main">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news">Новини</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">Про сайт</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts">Контакти</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right: 100px">
                        Вітаємо Вас,
                        <span style="color: lime">
                            <?=$this->user?>
                        </span>
                        !
                    </a>
                </li>
                <?php if ($this->user === 'Гість') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="entry">Вхід</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registry">Реєстрація</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="exit">Вихід</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Профіль</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>