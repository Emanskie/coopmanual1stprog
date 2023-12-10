/**
* Template Name: Flattern
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 16
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Header fixed top on scroll
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop
    let nextElement = selectHeader.nextElementSibling
    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('fixed-top')
        nextElement.classList.add('scrolled-offset')
      } else {
        selectHeader.classList.remove('fixed-top')
        nextElement.classList.remove('scrolled-offset')
      }
    }
    window.addEventListener('load', headerFixed)
    onscroll(document, headerFixed)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
    heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  document.addEventListener('DOMContentLoaded', function () {
    // SearchUtility class
    class SearchUtility {
      constructor() {
        this.toggleSearchBar = this.toggleSearchBar.bind(this);
        this.performSearch = this.performSearch.bind(this);
  
        document.getElementById('searchIcon').addEventListener('click', this.toggleSearchBar);
        document.getElementById('searchButton').addEventListener('click', this.performSearch);
        document.getElementById('searchInput').addEventListener('keydown', (event) => {
          if (event.key === 'Enter') {
            this.performSearch();
          }
        });
      }
  
      toggleSearchBar() {
        var searchBar = document.querySelector('.search-bar');
        searchBar.style.display = (searchBar.style.display === 'block') ? 'none' : 'block';
      }
  
      performSearch() {
        var searchTerm = document.getElementById('searchInput').value.toLowerCase();
        var searchPaths = {
          'home': 'index.php',
          'services': 'services.php',
          'savings': '/CoopManual/servicephp/savings.php',
          'Share Capital': '/CoopManual/savings/sharecapital.php',
          'Savings Deposit': '/CoopManual/savings/savingsdeposit.php',
          'Time Deposit': '/CoopManual/savings/timedeposit.php',
          'Youth Sector': '/CoopManual/savings/youthsector.php',
          'Laboratory Cooperative': '/CoopManual/savings/laboratorycoop.php',
          'MSU-IIT National Cooperative Academy': '/CoopManual/alliedbus/msuiitnca.php',
          'Insurance offered from CLIMBS': '/CoopManual/alliedbus/climbs.php',
          'Housing Cooperative': '/CoopManual/alliedbus/housingcoop.php',
          'Agri-Business': '/CoopManual/alliedbus/agribus.php',
          'Micro Loan': '/CoopManual/loans/microloan.php',
          'MSME Loan': '/CoopManual/loans/msmeloan.php',
          'Credit Line': '/CoopManual/loans/creditline.php',
          'Back-to-back Loan': '/CoopManual/loans/backtobackloan.php',
          'Enhanced Petty Cash Loan': '/CoopManual/loans/pettyloans.php',
          'Personal Loan': '/CoopManual/loans/personalloan.php',
          'Salary': '/CoopManual/loans/salaryloan.php',
          'Educational Loan': '/CoopManual/loans/educloan.php',
          'Pensioner\'s Loan': '/CoopManual/loans/pensionerloan.php',
          'Medical Emergency Loan': '/CoopManual/loans/medloan.php',
          'Enhanced Car Financing Loan': '/CoopManual/loans/carloan.php',
          'Gadget and Appliance Loan': '/CoopManual/loans/gadgetloan.php',
          'Bonus/Incentive Loan': '/CoopManual/loans/bonusloan.php',
          'LGU Salary Loan': '/CoopManual/loans/lguloan.php',
          'Enhanced COOP Care': '/CoopManual/memberbfs/coopcare.php',
          'Sunshine (Damayan) Fund': '/CoopManual/memberbfs/sunshine.php',
          'YAKAP - Yaman sa Kalusugan Program': '/CoopManual/memberbfs/yakap.php',
        };
  
        let minDistance = Infinity;
        let closestMatch = null;
  
        // Check for direct match in searchPaths
        if (searchPaths.hasOwnProperty(searchTerm)) {
          window.location.href = searchPaths[searchTerm];
          return;
        }
  
        // Check for similar words using Levenshtein distance
        for (const title in searchPaths) {
          const distance = getLevenshteinDistance(searchTerm, title.toLowerCase());
          if (distance < minDistance) {
            minDistance = distance;
            closestMatch = title;
          }
        }
  
        // Redirect if a close match is found
        if (minDistance < 4 && closestMatch) {
          window.location.href = searchPaths[closestMatch];
        } else {
          alert('No match found for "' + searchTerm + '".');
        }
      }
    }
  
    // Create an instance of the SearchUtility class
    const searchUtility = new SearchUtility();
  
    // Levenshtein distance function
    function getLevenshteinDistance(a, b) {
      if (a.length === 0) return b.length;
      if (b.length === 0) return a.length;
  
      const matrix = [];
  
      for (let i = 0; i <= b.length; i++) {
        matrix[i] = [i];
      }
  
      for (let j = 0; j <= a.length; j++) {
        matrix[0][j] = j;
      }
  
      for (let i = 1; i <= b.length; i++) {
        for (let j = 1; j <= a.length; j++) {
          const cost = a[j - 1] === b[i - 1] ? 0 : 1;
          matrix[i][j] = Math.min(
            matrix[i - 1][j] + 1,
            matrix[i][j - 1] + 1,
            matrix[i - 1][j - 1] + cost
          );
        }
      }
  
      return matrix[b.length][a.length];
    }
  });

})()