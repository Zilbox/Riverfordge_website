document.addEventListener('DOMContentLoaded', () => {
  let tabs = document.querySelectorAll('.tabs');
  if (tabs) {
      tabs.forEach(tabsElement => {
          if (tabsElement.querySelector('.tab')) {
              tabsElement.querySelectorAll('.tab').forEach(tab => {
                  if (tab.querySelector('.tab__trigger')) {
                      tab.querySelector('.tab__trigger').addEventListener('click', () => {
                          if (tabsElement.querySelector('.tab--active')) {
                              tabsElement.querySelectorAll('.tab--active').forEach(element => {
                                  element.classList.remove('tab--active')
                              })
                          }
                          tab.classList.add('tab--active')
                      })
                  }
              })    
          }
          

      })
  }

  const svg = document.querySelector('.outfit__wardrobe-svg');
  const wrap = svg.parentElement;
  const tip = document.querySelector('.outfit__tip');

  svg.querySelectorAll('g[data-tip]').forEach(g => {
      g.addEventListener('mouseenter', e => {
          tip.textContent = g.dataset.tip;
          tip.style.opacity = 1;
      });

      g.addEventListener('mousemove', e => {
          const wrapRect = wrap.getBoundingClientRect();
          tip.style.left = (e.clientX - wrapRect.left + 60) + 'px';
          tip.style.top  = (e.clientY - wrapRect.top + 85)  + 'px';
      });

      g.addEventListener('mouseleave', () => {
          tip.style.opacity = 0;
      });
  });

  if (document.querySelector('.modal')) {
    document.querySelectorAll('.modal').forEach(modal => {

      modal.addEventListener('click', (e) => {
        if (modal.querySelector('.modal__container') && !modal.querySelector('.modal__container').contains(e.target)) {
          modal.classList.remove('modal--active');
        }
      })
    })
  }

  if (document.getElementById('modalOutfit') && document.querySelector('.outfit__wardrobe-press')) {
    document.querySelectorAll('.outfit__wardrobe-press').forEach(element => {
      element.addEventListener('click', () => {
        document.getElementById('modalOutfit').classList.add('modal--active');

        document.getElementById('modalOutfit').querySelectorAll('div[data-outfit]').forEach(equipment => {
          if (equipment.dataset.outfit == element.parentElement.getAttribute('id')) {
            equipment.classList.add('outfit__equipment--active');
          } else {
            if (equipment.classList.contains('outfit__equipment--active')) {
              equipment.classList.remove('outfit__equipment--active');
            }
          }
      });
      })
    })
  }



})