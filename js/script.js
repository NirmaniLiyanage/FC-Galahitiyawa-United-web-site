// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");

// let searchBoxCancel = document.querySelector(".search-box .bx-x");
searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const searchIcon = document.querySelector('.bx-search');
  const searchInput = document.querySelector('.input-box input');
  const searchResults = document.getElementById('searchResults');
  let content = document.getElementById('content');

  searchIcon.addEventListener('click', () => {
      performSearch();
  });

  searchInput.addEventListener('keypress', (event) => {
      if (event.key === 'Enter') {
          performSearch();
      }
  });

  function performSearch() {
      const query = searchInput.value.trim().toLowerCase();
      if (query) {
          searchResults.innerHTML = ''; // Clear previous search results
          highlightText(query);
      }
  }

  function highlightText(query) {
      const regex = new RegExp(`(${query})`, 'gi');
      const contentHTML = content.innerHTML;
      const highlightedHTML = contentHTML.replace(regex, '<span class="highlight">$1</span>');
      searchResults.innerHTML = highlightedHTML;

      // Scroll to the first occurrence of the highlighted text
      const firstHighlight = searchResults.querySelector('.highlight');
      if (firstHighlight) {
          firstHighlight.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
  }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
 navLinks.classList.toggle("show3");
}