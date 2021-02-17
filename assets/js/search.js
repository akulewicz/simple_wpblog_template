const searchSwitcher = document.querySelector('.search-switcher--js');
const searchForm = document.querySelector('.search--js'); 

searchSwitcher.addEventListener('click', () => {
    searchForm.classList.toggle('search--visible');
})