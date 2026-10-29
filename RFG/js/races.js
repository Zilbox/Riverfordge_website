 /*races*/
document.addEventListener('DOMContentLoaded', () => {
  /*Переключение вида списка рас*/
  if (document.querySelector('.races__switch-btn')) {
    document.querySelectorAll('.races__switch-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        if (document.querySelector('.races__switch--active')) {
          document.querySelector('.races__switch--active').classList.remove('races__switch--active')
        }
        btn.classList.add('races__switch--active');
        switch (btn.dataset.type) {
          case "tile":
            if (document.getElementById('racesList') && !document.getElementById('racesList').classList.contains('races__list--tile')) {
              document.getElementById('racesList').classList.add('races__list--tile');
            }
            break;
          case "list":
            if (document.getElementById('racesList') && document.getElementById('racesList').classList.contains('races__list--tile')) {
              document.getElementById('racesList').classList.remove('races__list--tile');
            };
            break;
        }
      })
    })
  }


  /*переменные данных*/
  let states = [];
  let races = [];
  let subraces = [];


  /*переменные модального окна*/

  let modalSubraces = document.getElementById('modalSubraces');
  let modalRacesName = document.getElementById('modalRacesName');
  let modalRaceImage = document.getElementById('modalRaceImage');
  let modalSubracesName = document.getElementById('modalSubracesName');
  let modalSubracesNote = document.getElementById('modalSubracesNote');
  let modalImage = document.getElementById('modalImage');
  let modalSubracesStats = document.getElementById('modalSubracesStats');
  let modalSubracesStatsValue;
  let modalSubracesDescr = document.getElementById('modalSubracesDescr');


  async function loadJson(url) {
    const response = await fetch(url);
    if (!response.ok) throw new Error(`Не загрузился ${url}: HTTP ${response.status}`);
    return response.json();
  }

  async function init() {
    const base = '../data/';
    const manifest = await loadJson(base + 'races-index.json');

    // грузим всё параллельно
    const [statesData, racesData, subracesData] = await Promise.all([
      loadJson(base + manifest.states),
      loadJson(base + manifest.races),
      loadJson(base + manifest.subraces),
    ]);

    // записываем в глобальные переменные
    states  = statesData;
    races = racesData;
    subraces = subracesData;

    startFunctional();
  }

  function startFunctional() {

    let modalSubracesStatsElement;
    let modalSubracesStatsImage;

    states.forEach(state => {
      modalSubracesStatsElement = document.createElement('div');
      modalSubracesStatsElement.classList.add('modal__stats-item');
      modalSubracesStatsElement.dataset.stid = state.StID;
      modalSubracesStatsImage = document.createElement('img');
      modalSubracesStatsImage.classList.add('modal__stats-image');
      modalSubracesStatsImage.setAttribute('src', modalSubracesStats.dataset.imageUrl+state.SrUrl);
      modalSubracesStatsElement.append(modalSubracesStatsImage);
      modalSubracesStatsElement.append(document.createElement('p'));
      modalSubracesStats.append(modalSubracesStatsElement);
    })

  /*Открытие окна с описание подрас*/
    if (document.querySelector('.subraces__item')) {
      document.querySelectorAll('.subraces__item').forEach(srItem => {
        srItem.addEventListener('click', () => {
          completionModal(srItem.dataset.srid);
          modalSubraces.classList.add('modal--active');
        })
      })
    }
    

    if (document.querySelector('.modal__close')) {
      document.querySelectorAll('.modal__close').forEach(modalClose => {
        modalClose.addEventListener('click', () => {
          if (document.getElementById(modalClose.dataset.modal) && document.getElementById(modalClose.dataset.modal).classList.contains('modal--active')) {
            document.getElementById(modalClose.dataset.modal).classList.remove('modal--active')
            modalImage.setAttribute('src', '');
          }
          
        })
      })
    }
  }

  function completionModal(srid) {
    srid = srid - 1;
    modalRaceImage.setAttribute('src', modalRaceImage.dataset.url+races[subraces[srid].RcID - 1].RcUrl);
    modalRacesName.innerHTML = '<b>' + races[subraces[srid].RcID - 1].RcName + '</b>';    
    modalSubracesName.innerHTML = '<b>' + subraces[srid].SrName + '</b>';
    modalSubracesNote.textContent = (subraces[srid].SrNote !== null)?subraces[srid].SrNote:"";
    modalImage.setAttribute('src', modalImage.dataset.url+subraces[srid].SrUrl);
    modalSubracesDescr.innerHTML = subraces[srid].SrDescr ;
    subraces[srid].SrStates.forEach(state => {
      modalSubracesStatsValue = document.createElement('p');
      switch (state.StValue) {
        case "unavailable": 
          modalSubracesStats.querySelector('[data-stid="'+state.StID+'"]').classList.add('states--unavailable');
          modalSubracesStats.querySelector('[data-stid="'+state.StID+'"]').querySelector('p').innerHTML = '';
          break;
        default: 
          modalSubracesStats.querySelector('[data-stid="'+state.StID+'"]').classList.remove('states--unavailable');
          modalSubracesStats.querySelector('[data-stid="'+state.StID+'"]').querySelector('p').innerHTML = '<b>'+state.StValue+'</b>';
      }
      
    })

  }

  init();

})