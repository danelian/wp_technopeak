$(document).ready(function () {
  const body = document.querySelector('body');

  // ---------------------- HEADER -----------------------
  const scrollHeader = () => {
    const header = document.getElementById('header')
    window.scrollY >= 80 ? header.classList.add('active') : header.classList.remove('active')
  }
  window.addEventListener('scroll', scrollHeader)


  // ------------------- BURGER MENU ---------------------
  const burgerMenu = document.getElementById('burger-menu'),
        burgerOpen = document.getElementById('burger-open'),
        burgerClose = document.getElementById('burger-close'),
        burgerLinks = document.querySelectorAll('.header__nav>ul>li>a, .header__nav .header__contacts a')
  burgerOpen.addEventListener('click', () => {
    burgerMenu.classList.add('open-menu');
    body.classList.add('dis-scroll');
  })
  burgerClose.addEventListener('click', () => {
    burgerMenu.classList.remove('open-menu');
    body.classList.remove('dis-scroll');
  })
  const linkAction = () => {
    const burgerMenu = document.getElementById('burger-menu');
    burgerMenu.classList.remove('open-menu');
    body.classList.remove('dis-scroll');
  }
  burgerLinks.forEach(n => n.addEventListener('click', linkAction));


  // ---------------- HEADER SUB-MENU ICON ----------------
  var liElements = document.querySelectorAll('.header__menu li')
  for (var i = 0; i < liElements.length; i++) {
    var li = liElements[i]
    var submenu = li.getElementsByClassName('sub-menu')[0]
    if (submenu) {
      var button = document.createElement('button')
      button.className = 'sub-menu__button'
      li.insertBefore(button, submenu)
    }
  }
  // --------------- HEADER BURGER SUB-MENU ----------------
  if (window.innerWidth < 1366) {
    const accordeonMenuItems = document.querySelectorAll('.header__menu li.menu-item-has-children')
    accordeonMenuItems.forEach(item => {
      const accordeonMenuButton = item.querySelector('.sub-menu__button')
      accordeonMenuButton.addEventListener('click', () => {
        const openMenuItem = document.querySelector('.open')
        toggleMenuItem(item)
        if (openMenuItem && openMenuItem !== item) {
          toggleMenuItem(openMenuItem)
        }
      })
    })
    const toggleMenuItem = item => {
      const accordeonMenuContent = item.querySelector('.header__menu li.menu-item-has-children .sub-menu')
      if (item.classList.contains('open')) {
        accordeonMenuContent.removeAttribute('style')
        item.classList.remove('open')
      } else {
        accordeonMenuContent.style.height =
          accordeonMenuContent.scrollHeight + 'px'
        item.classList.add('open')
      }
    }
  }


  // ------------------ SEARCH (HEADER) -------------------
  if (window.innerWidth >= 1366) {
    let searchForm = document.querySelector("#searchForm");
    let searchInput = document.querySelector("#searchForm .search-input");
    let searchButton = document.querySelector("#searchButton");
    searchButton.addEventListener("click", (e) => {
      if (!searchForm.classList.contains('active')) {
        e.preventDefault();
      }
      searchForm.classList.toggle("active");
      searchInput.focus();
    });
    window.onscroll = () => {
      searchForm.classList.remove("active");
    }
    document.addEventListener("click", (event) => {
      if (!searchForm.contains(event.target)) {
        searchForm.classList.remove("active");
      }
    });
  };

});