const section1_title = document.querySelector('.section1 .title');
const section2_title = document.querySelector('.section2 .title');
const section3_title = document.querySelector('.section3 .title');
const section4_title = document.querySelector('.section4 .title');
const section5_title = document.querySelector('.section5 .title');

const section1_desc = document.querySelector('.section1 .desc');
const section2_part = document.querySelectorAll('.section2 .part');
const section3_card = document.querySelectorAll('.section3 .card');
const section5_card = document.querySelectorAll('.section5 .card');

function getLanguages(url) {
    var symbols = {
        'HTML': '<i class="fi fi-brands-html5"></i>',
        'CSS': '<i class="fi fi-brands-css3-alt"></i>',
        'PHP': '<i class="fi fi-brands-php"></i>',
        'Hack': '',
        'JavaScript': '<i class="fi fi-brands-js"></i>',
        'Python': '<i class="fi fi-brands-python"></i>',
        'Procfile': '<i class="fi fi-rr-file-spreadsheet"></i>'

    }
    var languages = {}
    var total = 0

    languages = JSON.parse('{"HTML": 588306, "CSS": 329724, "PHP": 130474, "Hack": 84093, "JavaScript": 52295, "Python": 3029}')

    for (const i in languages) {
        total += languages[i]
    }


    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", url, true)

    // xhr.onload = xhrToObj(xhr.responseText)
    // xhr.onerror = function() {
    //     console.error(xhr.status, xhr.statusText)
    // }

    // xhr.send()

    var content = document.querySelector('.section4 .content')

    for (i in languages) {
        var card = document.createElement('div')
        var card_title = document.createElement('div')
        var bar = document.createElement('div')
        var percent = document.createElement('div')

        card.className = 'card'

        card_title.className = 'card-title'
        bar.className = 'bar'
        percent.className = 'percent'

        card_title.innerHTML = symbols[i] + " " + i

        percent.style.width = ((languages[i]/total)*100).toFixed(1).toString() + "%"
        percent.innerHTML = ((languages[i]/total)*100).toFixed(1).toString() + "%"

        bar.appendChild(percent)

        card.appendChild(card_title)
        card.appendChild(bar)

        content.append(card)

    }

    var find_more = document.createElement('div')
    var link = document.createElement('a')

    find_more.className = 'find-more'

    link.setAttribute('href', '#')
    link.setAttribute('target', '_blank')
    link.innerHTML = "Tìm hiểu thêm &rarr;"

    find_more.appendChild(link)
    content.appendChild(find_more)

}

getLanguages("https://api.github.com/repos/longtoZ/score/languages")

const observerFade = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.toggle('fade');
            observerFade.unobserve(entry.target);
        }
    })
}, {
    threshold: 0.5
});

const observerMoveUp = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.toggle('moveUp');
            observerMoveUp.unobserve(entry.target);
        }
    })
}, {
    threshold: 0.5
});

function observerPercent() {
    const section4_percent = document.querySelectorAll('.section4 .percent');
    const observerPercent = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.toggle('hide-percent');
                observerPercent.unobserve(entry.target);
            }
        })
    }, {
        threshold: 0.5
    });

    observerFade.observe(section4_title)

    section4_percent.forEach(item => {
        observerPercent.observe(item)
    })
}

observerPercent()


observerFade.observe(section1_title)
observerFade.observe(section2_title)
observerFade.observe(section3_title)
observerFade.observe(section5_title)


const mediaQuery = window.matchMedia('(max-width: 46.1875em)')
if (mediaQuery.matches) {
    section1_desc.classList.remove('hide-fade')
} else {
    observerFade.observe(section1_desc)
}


section2_part.forEach(item => {
    observerFade.observe(item)
})

section3_card.forEach(item => {
    observerMoveUp.observe(item)
})

section5_card.forEach(item => {
    observerMoveUp.observe(item)
})