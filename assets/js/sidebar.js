const sidebarSwitcher = document.querySelector('.sidebar__switcher--js');
const sidebar = document.querySelector('.sidebar--js');
const sidebarPanel = document.querySelector('.sidebar__panel--js');


sidebarSwitcher.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar--visible');
    sidebarPanel.classList.toggle('sidebar__panel--visible')
    
    
    if (sidebar.classList.contains('sidebar--visible')) {
        sidebarSwitcher.innerHTML = '<i class="fas fa-times"></i>';
        sidebarSwitcher.classList.toggle('sidebar__switcher--visible')
    } else {
        sidebarSwitcher.innerHTML = '<i class="fas fa-bars"></i>';
        sidebarSwitcher.classList.toggle('sidebar__switcher--visible')
    }
})