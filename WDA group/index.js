const openHeader = document.getElementById('openHeader')
const header = document.getElementsByClassName("header")

const headerLinks = document.getElementsByClassName('headerText');
for (let i = 0; i < headerLinks.length; i++) {
    headerLinks[i].addEventListener('click', function() {
        toggleMenu();
    })
}

function toggleMenu() {
    header[0].classList.toggle("open")

    if(header[0].classList.contains("open")) {
        openHeader.innerHTML = "close menu"
    }else {
        openHeader.innerHTML = "open menu"
    }
}

openHeader.addEventListener('click', function(){
    toggleMenu();
})