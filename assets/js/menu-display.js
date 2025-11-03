const menuButton = document.getElementById('menu-button')
const sideMenu = document.getElementById('side-menu')
const closeButton = document.getElementById('close-button')

menuButton.addEventListener('click', () => {
    sideMenu.style.display = 'flex';
    document.body.style.overflow = 'hidden';
})

closeButton.addEventListener('click', () => {
    sideMenu.style.display = 'none';
    document.body.style.overflow = 'auto';
})