const school_normal = document.querySelector('.school__normal')
const school_pro = document.querySelector('.school__pro')
const filter_score_container = document.querySelector('.filter-score-container')
const score_average = document.querySelector('.score-average')

function createProSubject() {
    const wish_list = document.querySelector('.filter-wish-list')
    const advanced_wish_list = document.querySelector('.filter-wish-advanced-list')

    document.querySelectorAll('.filter-wish-list .wish').forEach(i => {i.remove()})
    document.querySelectorAll('.filter-wish-advanced-list .wish').forEach(i => {i.remove()})

    for (const i in proSubjectsObj) {
        const item = document.createElement('div')
        
        item.className = "wish"
        item.innerHTML = i
    
        wish_list.appendChild(item)
        advanced_wish_list.appendChild(item.cloneNode(true))
    }

    wish_list.parentNode.querySelector('.filter-wish-select .select').innerHTML = "Nguyện vọng Chuyên Anh"
    advanced_wish_list.parentNode.querySelector('.filter-wish-advanced-select .select').innerHTML = "Nguyện vọng Chuyên Anh"

}

function isNormal() {
    if (school_normal.className.includes('school-active')) {
        return true
    } else {
        return false
    }
}

function proSubjectColumn() {
    const filter_wish_select = document.querySelector('.filter-wish-select .select').textContent

    if (filter_wish_select.includes('Chuyên')) {
        const col1 = proSubjectsObj[filter_wish_select]
        const col2 = proSubjectsObj[filter_wish_select].replace('1', '2')
    
        return `${col1},${col2}`
    } else {
        return normalSubjectsObj[filter_wish_select]
    }

}

school_pro.addEventListener('click', function() {

    if (!school_pro.className.includes('school-active')) {
        school_normal.classList.remove('school-active')
        school_pro.classList.toggle('school-active')

        const pro_col = '#0076b4'
        document.querySelector('.score-cal').style.backgroundColor = pro_col
        document.querySelector('.score-average').style.color = pro_col
        document.getElementById('submit').style.backgroundColor = pro_col
        document.querySelector('.filter-between .between-search').style.backgroundColor = pro_col
        // document.querySelectorAll('.adv-select').forEach(i => {
        //     i.style.backgroundColor = 'var(--col-blue-bg)'
        //     i.style.color = 'var(--col-blue-txt)'
        // })

        document.getElementById('floating-button').style.backgroundColor = pro_col
        document.querySelector('#floating-box .print').style.backgroundColor = pro_col
    }

    if (!document.querySelector('.score-pro')) {
        const pro_subject = document.createElement('input')

        pro_subject.setAttribute('type', 'number')
        pro_subject.setAttribute('class', 'score-pro primary-box')
        pro_subject.setAttribute('placeholder', 'Nhập điểm chuyên')
    
        filter_score_container.insertBefore(pro_subject, score_average)
    
        createProSubject()
        recreateWishList()
    }

    document.querySelector('.filter-more-box').style.display = 'none'
    

})

school_normal.addEventListener('click', function() {

    if (!school_normal.className.includes('school-active')) {
        school_normal.classList.toggle('school-active')
        school_pro.classList.remove('school-active')

        const normal_col = 'var(--green)'
        document.querySelector('.score-cal').style.backgroundColor = normal_col
        document.querySelector('.score-average').style.color = normal_col
        document.getElementById('submit').style.backgroundColor = normal_col
        document.querySelector('.filter-between .between-search').style.backgroundColor = normal_col
        // document.querySelectorAll('.adv-select').forEach(i => {
        //     i.style.backgroundColor = 'var(--col-green-bg)'
        //     i.style.color = 'var(--col-green-txt)'
        // })

        document.getElementById('floating-button').style.backgroundColor = normal_col
        document.querySelector('#floating-box .print').style.backgroundColor = normal_col
    }


    const pro_subject = document.querySelector('.score-pro')

    if (pro_subject) { pro_subject.remove() }

    document.querySelector('.filter-more-box').style.display = 'flex'

    createWishList()
    recreateWishList()
})
