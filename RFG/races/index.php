<?php 
  $pageStyles = ['../css/races.css'];
  require_once '../header.php'; 
?>
  <main class="main">
    <section class="races">
      <div class="container races__container">
        <div class="races__switch">
          <div class="races__switch-btn races__switch-list races__switch--active" data-type='list'></div>
          <div class="races__switch-btn races__switch-tile" data-type='tile'></div>
        </div>
        <div id="racesList" class="races__list" >
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Люди.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Люди</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="1">
                    <div class="subraces__name">Северные</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="2">
                    <div class="subraces__name">Южные</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="3">
                    <div class="subraces__name">Восточные</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Эльфы.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Эльфы</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="4">
                    <div class="subraces__name">Вестлинги</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="5">
                    <div class="subraces__name">Гондрлинги</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="6">
                    <div class="subraces__name">Дроулинги</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Дворфы.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Дворфы</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="7">
                    <div class="subraces__name">Ревгирны</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="8">
                    <div class="subraces__name">Шогирны</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="9">
                    <div class="subraces__name">Лосгирны</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Полурослики.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Полурослики</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="10">
                    <div class="subraces__name">Хафмы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="11">
                    <div class="subraces__name">Гномы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="12">
                    <div class="subraces__name">Хайлы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Орки.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Орки</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="13">
                    <div class="subraces__name">Огм'ары</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="14">
                    <div class="subraces__name">Друг'ары</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="15">
                    <div class="subraces__name">Зуг'ары</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Гоблины.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Гоблины</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="16">
                    <div class="subraces__name">Вудлины</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="17">
                    <div class="subraces__name">Уруклины</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="18">
                    <div class="subraces__name">Шкрилины</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Арахси.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Арахси</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="19">
                    <div class="subraces__name">Йарвери</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="20">
                    <div class="subraces__name">Йаргахи</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="21">
                    <div class="subraces__name">Йаргари</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Кентавры.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Кентавры</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="22">
                    <div class="subraces__name">Элс'мавар</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="23">
                    <div class="subraces__name">Меджаи</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="24">
                    <div class="subraces__name">Ринъюмба</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Йотуны.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Йотуны</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="25">
                    <div class="subraces__name">Ульфхгарцы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="26">
                    <div class="subraces__name">Эгирийцы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="27">
                    <div class="subraces__name">Мордгардцы</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Сабвеки.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Сабвеки</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="28">
                    <div class="subraces__name">Мавеки</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="29">
                    <div class="subraces__name">Сахвеки</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="30">
                    <div class="subraces__name">Джувеки</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Орниксы.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Орниксы</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="31">
                    <div class="subraces__name">Коалиты</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="32">
                    <div class="subraces__name">Безкрылые</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="33">
                    <div class="subraces__name">Одарённые</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Аскемы.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Аскемы</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="34">
                    <div class="subraces__name">Хушу-коталь</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="35">
                    <div class="subraces__name">Хушу-рептак</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="36">
                    <div class="subraces__name">Хушу-амфага</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="races__item">
            <div class="races__image">
              <img src="../img/icon_race_gold/Элурики.png" alt="" class="races__icon">
            </div>
            <div class="reces__info">
              <div class="reces__top">
                <div class="races__name"><b>Элурики</b></div>
                <div class="races__decor"></div>
              </div>
              <div class="races__subraces subraces">
                <div class="subraces__list">
                  <div class="subraces__item" data-srid="37">
                    <div class="subraces__name">Нэцкэ</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="38">
                    <div class="subraces__name">Чиссана</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                  <div class="subraces__item" data-srid="39">
                    <div class="subraces__name">Иккаи-фену</div>
                    <div class="subraces__decor">
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="main__wall-left"></div>
    <div class="main__wall-right"></div>
    <div class="main__decor-top"></div> 
    <div class="main__decor-bottom"></div>

    
  </main>
  <div id="modalSubraces" class="modal__subraces">
    <div class="modal__conteiner">
      <div class="modal__subraces-top">
        <div class="modal__races-name">
          <img id="modalRaceImage" src="" alt="" data-url="../img/icon_race_gold/">
          <p id="modalRacesName"></p>
        </div>
        <div id="modalSubracesName" class="modal__subraces-name"><b></b></div>
        <div id="modalSubracesNote" class="modal__subraces-note"></div>
      </div>
      <div class="modal__subraces-info">
        <div class="modal__image-container">
          <img src="" alt="" id="modalImage" data-url="../img/race/subraces/">
          <div class="modal__image-bottom"></div>
        </div>
        <div class="modal__subraces-right">
          <div id="modalSubracesStats" class="modal__subraces-stats" data-image-url="../img/character/stats/">
            
          </div>
          <div id="modalSubracesDescr" class="modal__subraces-descr">
            Их род множился.. Создавая персонажа, игрок может выбрать любую характеристику, увеличив куб проверки для неё до 1d12 и любую другую, снизив куб проверки для неё на 1d6. Муравьи на двух ногах В самой крови человека таится неукротимое стремление выжить. При любых бросках «Перевязки» или оказания «Первой помощи» персонаж получает +1 к результату — будь то лечение собственных ран или спасение товарища.
          </div>
          </div>
      </div>
      <div id="modalSubracesClose" class="modal__close" data-modal="modalSubraces"></div>
    </div>
  </div>
  <script src="../js/races.js"></script>
<?php /*require_once 'footer.php';*/ ?>

