var minimizeTitle = document.querySelectorAll('section h2')

for (i of minimizeTitle) {
    var item = document.createElement('span')
    item.innerHTML = '<i class="fi fi-rr-angle-small-up"></i>'
    item.style.position = 'absolute'
    item.style.color = 'black'
    item.style.right = '1em'
    item.style.fontSize = '1.1em'
    item.style.fontWeight = '400'
    item.style.cursor = 'pointer'

    i.appendChild(item)
}

var minimizeBtn = document.querySelectorAll('section h2 span')

minimizeBtn.forEach(item => {
    item.onclick = function() {
        this.parentElement.parentElement.classList.toggle('minimize')
    }
});