const openHeader = document.getElementById('openHeader')
const header = document.getElementsByClassName("header")

openHeader.addEventListener('click', function(){
    header[0].classList.toggle("open")

    if(header[0].classList.contains("open")) {
        openHeader.innerHTML = "close menu"
    }else {
        openHeader.innerHTML = "open menu"
    }
})