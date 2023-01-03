const school_normal = document.querySelector('.school__normal')
const school_pro = document.querySelector('.school__pro')
const filter_score_container = document.querySelector('.filter-score-container')
const score_average = document.querySelector('.score-average')
const search_result = document.getElementById('search-result')

function createProSubject() {
    const advanced_wish_list = document.querySelector('.filter-wish-advanced-list')

    document.querySelectorAll('.filter-wish-advanced-list .wish').forEach(i => {i.remove()})

    for (const i in proSubjectsObj) {
        const item = document.createElement('div')
        
        item.className = "wish"
        item.innerHTML = i
    
        advanced_wish_list.appendChild(item.cloneNode(true))
    }

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
    const filter_wish_advanced_select = document.querySelector('.filter-wish-advanced-select .select').textContent

    if (filter_wish_advanced_select.includes('Chuyên')) {
        const col1 = proSubjectsObj[filter_wish_advanced_select]
        const col2 = proSubjectsObj[filter_wish_advanced_select].replace('1', '2')
    
        return `${col1},${col2}`
    } else {
        return normalSubjectsObj[filter_wish_advanced_select]
    }

}

school_pro.addEventListener('click', function() {

    if (!school_pro.className.includes('school-active')) {
        school_normal.classList.remove('school-active')
        school_pro.classList.toggle('school-active')
        document.querySelector('.district-all').click()

        const pro_col = '#0076b4'
        const pro_col_select_bg = 'var(--col-blue-bg)'
        const pro_col_select_txt = 'var(--col-blue-txt)'

        document.querySelector('.filter-between .between-search').style.backgroundColor = pro_col
        document.querySelectorAll('.adv-select').forEach(i => {
            i.style.backgroundColor = pro_col_select_bg
            i.style.color = pro_col_select_txt
        })
        document.getElementById('floating-button').style.backgroundColor = pro_col
        document.querySelector('#floating-box .print').style.backgroundColor = pro_col

    }

    if (!document.querySelector('.score-pro')) {
    
        createProSubject()
        recreateWishList()
    }

    document.querySelector('.filter-more-box').style.display = 'none'
    search_result.innerHTML = ''
    

})

school_normal.addEventListener('click', function() {

    if (!school_normal.className.includes('school-active')) {
        school_normal.classList.toggle('school-active')
        school_pro.classList.remove('school-active')
        document.querySelector('.district-all').click()

        const normal_col = 'var(--green)'
        const normal_col_select_bg = 'var(--col-green-bg)'
        const normal_col_select_txt = 'var(--col-green-txt)'

        document.querySelector('.filter-between .between-search').style.backgroundColor = normal_col
        document.querySelector('.adv-select').style.backgroundColor = normal_col_select_bg
        document.querySelector('.adv-select').style.color = normal_col_select_txt
        document.getElementById('floating-button').style.backgroundColor = normal_col
        document.querySelector('#floating-box .print').style.backgroundColor = normal_col
    }


    const pro_subject = document.querySelector('.score-pro')

    if (pro_subject) { pro_subject.remove() }

    document.querySelector('.filter-more-box').style.display = 'flex'
    search_result.innerHTML = ''

    createWishList()
    recreateWishList()
})
