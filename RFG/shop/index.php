<?php require_once '../header.php'; ?>

  <main class="main main-shop">
    <section class="shop room-bg">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
          y="0px" viewBox="0 0 1536 1024" style="enable-background:new 0 0 1536 1024;" xml:space="preserve" class="shop__svg">
        <g id="catalogBtn">
          <path d="M102.5,570.5l73,236l123-50l-67-205l-46,7c0,0-9.5-10.5-10.5-10.5s-5.5,13.5-5.5,13.5L102.5,570.5z"/>
        </g>
      </svg>
      <div class="candle-overlay"></div>
      <div class="candle-overlay candle-overlay--2"></div>
      <div class="candle-overlay candle-overlay--3"></div>

      <div class="book-wrap book-wrap--hidden" id="catalog" >
        <div class="book" id="book">

          <!-- ЛЕВАЯ (статичная) половина -->
          <div class="side left">
            <div class="page-face back-cover"></div>
          </div>

          <!-- Правая половина: здесь живут переворачивающиеся листы -->
          <div class="side right">
            <!-- Каждый "лист" — это отдельный .sheet -->
            <div class="sheet" data-index="0">
              <div class="page-face page-face--title front">
                <h2>Зелья</h2>
                <p>Быстро, дёшево, действует сразу. Пей — и беги, пока не подействовало. Побочные эффекты указаны мелким шрифтом. Мелкий шрифт утерян.</p>
                <div class="page-pagination">1</div>
              </div>
              <div class="page-face back">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Малое-зелье-лечения.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Малое зелье лечения</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 20 здоровья</div>
                      </div>
                      <div class="book__element-descr">Здоровье — ваша главная броня против ошибок. Чем выше запас жизненных сил, тем ниже цена пропущенного выпада и тем вернее шанс нанести ответный, решающий удар.</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">30$</div>
                <div class="page-pagination">2</div>
              </div>
            </div>

            <div class="sheet" data-index="1">
              <div class="page-face front">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Зелье-лечения.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Зелье лечения</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 40 здоровья</div>
                      </div>
                      <div class="book__element-descr">Злоупотребление целительными составами ведет к опасному искажению восприятия: систематическое устранение смертельных ран порождает зависимость от выживания, притупляя природный страх гибели и поощряя безрассудство.</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">60$</div>
                <div class="page-pagination">3</div>
              </div>
              <div class="page-face back">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Малое-зелье-восстановления-маны.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Малое зелье восстановления маны</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 25 маны</div>
                      </div>
                      <div class="book__element-descr">Мана — мерило вашей мощи. Внушительный запас стирает необходимость экономить силы, превращая заклинателя в непрерывный источник разрушения.</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">30$</div>
                <div class="page-pagination">4</div>
              </div>
            </div>

            <div class="sheet" data-index="2">
              <div class="page-face front">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Зелье-восстановления-маны.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Зелье восстановления маны</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 50 маны</div>
                      </div>
                      <div class="book__element-descr">— Не глуши разом! Там алхимического концентрата столько, что череп изнутри затрещит!<br>
                        — Сюда дай! Завтра голова поболит и перестанет, а если эта тварь прорвёт строй — к рассвету болеть будет просто нечему!</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">60$</div>
                <div class="page-pagination">5</div>
              </div>
              <div class="page-face back">
                <h2>Страница 6</h2>
                <p>Конец. Кликните ещё раз, чтобы вернуться.</p>
                <div class="page-pagination">6</div>
              </div>
            </div>
            <div class="sheet" data-index="3">
              <div class="page-face front">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Зелье-восстановления-маны.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Зелье восстановления маны</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 50 маны</div>
                      </div>
                      <div class="book__element-descr">— Не глуши разом! Там алхимического концентрата столько, что череп изнутри затрещит!<br>
                        — Сюда дай! Завтра голова поболит и перестанет, а если эта тварь прорвёт строй — к рассвету болеть будет просто нечему!</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">60$</div>
                <div class="page-pagination">7</div>
              </div>
              <div class="page-face back">
                <h2>Страница 6</h2>
                <p>Конец. Кликните ещё раз, чтобы вернуться.</p>
                <div class="page-pagination">8</div>
              </div>
            </div>
            <div class="sheet" data-index="4">
              <div class="page-face front">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Зелье-восстановления-маны.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Зелье восстановления маны</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 50 маны</div>
                      </div>
                      <div class="book__element-descr">— Не глуши разом! Там алхимического концентрата столько, что череп изнутри затрещит!<br>
                        — Сюда дай! Завтра голова поболит и перестанет, а если эта тварь прорвёт строй — к рассвету болеть будет просто нечему!</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">60$</div>
                <div class="page-pagination">9</div>
              </div>
              <div class="page-face back">
                <h2>Страница 6</h2>
                <p>Конец. Кликните ещё раз, чтобы вернуться.</p>
                <div class="page-pagination">10</div>
              </div>
            </div>
            <div class="sheet" data-index="5">
              <div class="page-face front">
                <div class="page-container">
                  <div class="book__element">
                    <img src="../img/shops/book/potions/Зелье-восстановления-маны.webp"  alt="" class="book__element-image">
                    <div class="book__element-info">
                      <div class="book__element-name">Зелье восстановления маны</div>
                      <div class="book__element-common book__element-type">
                        <div>Тип действия:</div>
                        <div class="value">Дополнительное</div>
                      </div>
                      <div class="book__element-common book__element-effect">
                        <div>Эффект:</div>
                        <div class="value">При употреблении, восстанавливает 50 маны</div>
                      </div>
                      <div class="book__element-descr">— Не глуши разом! Там алхимического концентрата столько, что череп изнутри затрещит!<br>
                        — Сюда дай! Завтра голова поболит и перестанет, а если эта тварь прорвёт строй — к рассвету болеть будет просто нечему!</div>
                      
                    </div>
                  </div>
                </div>
                <div class="book__element-price">60$</div>
                <div class="page-pagination">11</div>
              </div>
              <div class="page-face back">
                <h2>Страница 6</h2>
                <p>Конец. Кликните ещё раз, чтобы вернуться.</p>
                <div class="page-pagination">12</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <script src="../js/shop.js"></script>

<?php /*require_once 'footer.php';*/ ?>

