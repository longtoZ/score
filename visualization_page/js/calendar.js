var exams_date = []
var exams_month = 0
var exams_year = 0

fetch("../json/exams.json")
    .then(response => response.json())
    .then(data => {
        console.log(data)
        for (i of data.year2022.days) {
            exams_date.push(i)
        }
        exams_month = data.year2022.month
        exams_year = data.year2022.year
    });



let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (!month) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)
    // console.log(first_day.getDay())
    // console.log(month)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            // console.log(i)
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1

            day.onclick = () => {
                day.style.background = "#00987929"
            }

            let sunday = new Date(year, month, i-first_day.getDay()+1)
            if (sunday.getDay()==0){
                day.style.color = "tomato"
            }

            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
                day.style.pointerEvents = "none"
            }

            for (j of exams_date) {
                if (i - first_day.getDay() + 1 == j && month == exams_month-1 && year == exams_year) {
                    day.style.background = "tomato"
                    day.style.color = "white"
                    day.style.pointerEvents = "none"
                }
            }
            

            
            
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

