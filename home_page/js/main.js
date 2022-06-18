const section1_title = document.querySelector('.section1 .title');
const section2_title = document.querySelector('.section2 .title');
const section3_title = document.querySelector('.section3 .title');
const section4_title = document.querySelector('.section4 .title');
const section5_title = document.querySelector('.section5 .title');

const section1_desc = document.querySelector('.section1 .desc');
const section2_part = document.querySelectorAll('.section2 .part');
const section3_card = document.querySelectorAll('.section3 .card');
const section5_card = document.querySelectorAll('.section5 .card');

const section4_percent = document.querySelectorAll('.section4 .percent');

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


const observerPercent = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('hide-percent');
            observerPercent.unobserve(entry.target);
        }
    })
}, {
    threshold: 1
});

observerFade.observe(section1_title)
observerFade.observe(section2_title)
observerFade.observe(section3_title)
observerFade.observe(section4_title)
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

section4_percent.forEach(item => {
    observerPercent.observe(item)
})

section5_card.forEach(item => {
    observerMoveUp.observe(item)
})


document.getElementById('scroll-button').addEventListener('click', function() {
    document.documentElement.scrollTop = 0;
})
