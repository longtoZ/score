const sidebar_container = document.querySelector('.sidebar-container')
const board_container = document.querySelector('.board-container')

const display_tab = document.getElementById('display-tab')
const edit_tab = document.getElementById('edit-tab')
const insert_tab = document.getElementById('insert-tab')

const display_card = document.getElementById('display-card')
const edit_card = document.getElementById('edit-card')
const insert_card = document.getElementById('insert-card')

const edit_action_alert = document.querySelector('#edit-card .action-alert')
const edit_row = document.querySelector('.edit-row')

const basic_parent = document.querySelector('#insert-card .show__basic')
const insert_action_alert = document.querySelector('#insert-card .action-alert')
// const add_insert = document.querySelector('.add-insert')
// const remove_insert = document.querySelector('.remove-insert')

const alert_container = document.querySelector('.alert-container')
const overlay = document.querySelector('.overlay')
const delete_confirm = document.querySelector('.delete-confirm')
const delete_cancel = document.querySelector('.delete-cancel')

const delete_action_alert = document.querySelector('.alert-container .display__content')


function columnAction() {
    const column_select = document.querySelectorAll('.column-select')
    const list_item = document.querySelectorAll('.list-item')
    
    column_select.forEach(i => {
        i.onclick = function() {
            if (!this.className.includes('disable')) {
                this.classList.toggle('disable')
            } else {
                this.classList.remove('disable')
            }
        }
    })
    
    list_item.forEach(i => {
        i.onclick = function() {
            i.parentNode.parentNode.parentNode.querySelector('.dropdown__title span').innerHTML = i.innerHTML
            i.parentNode.parentNode.parentNode.querySelector('input').checked = false
        }
    })
}

columnAction()


display_tab.addEventListener('click', function() {
    if (!display_tab.className.includes('tab-active')) {
        display_tab.classList.toggle('tab-active')
        display_card.classList.toggle('card-active')
    
        edit_tab.classList.remove('tab-active')
        edit_card.classList.remove('card-active')

        insert_tab.classList.remove('tab-active')
        insert_card.classList.remove('card-active')
    }
})

edit_tab.addEventListener('click', function() {
    if (!edit_tab.className.includes('tab-active')) {
        display_tab.classList.remove('tab-active')
        display_card.classList.remove('card-active')
    
        edit_tab.classList.toggle('tab-active')
        edit_card.classList.toggle('card-active')
        
        insert_tab.classList.remove('tab-active')
        insert_card.classList.remove('card-active')
    }
})

insert_tab.addEventListener('click', function() {
    if (!insert_tab.className.includes('tab-active')) {
        display_tab.classList.remove('tab-active')
        display_card.classList.remove('card-active')
    
        edit_tab.classList.remove('tab-active')
        edit_card.classList.remove('card-active')
        
        insert_tab.classList.toggle('tab-active')
        insert_card.classList.toggle('card-active')
    }
})


function addInsert() {
    const insert_row = document.querySelector('.insert-row')
    const list_length = document.querySelectorAll('.insert-row').length
    if (list_length >= 5) {
        insertAction("error", "Giới hạn sửa tối đa cùng lúc là 5 mục")
    } else {
        basic_parent.insertBefore(insert_row.cloneNode(true), insert_action_alert)
    }
}

function removeInsert() {
    const insert_row_list = document.querySelectorAll('.insert-row')
    const list_length = insert_row_list.length
    if (list_length> 1) {
        insert_row_list[list_length-1].remove()
    } else {
        insertAction("error", "Số lượng mục quá ít để xoá")
    }
}

function editSucceed(ctx) {
    editAction('succeed', '✔ Sửa đổi thành công: ' + ctx)
}

function editFailed(ctx) {
    editAction('error', '✖ Sửa đổi không thành công: ' + ctx)
}

function insertSucceed(ctx) {
    insertAction('succeed', '✔ Thêm dữ liệu thành công: ' + ctx)
}

function insertFailed(ctx) {
    insertAction('error', '✖ Thêm dữ liệu không thành công: ' + ctx)
}


function refreshHighlightRow() {
    document.querySelectorAll('td').forEach(i => {
        i.style.color = null
        i.style.backgroundColor = null
    })
}

function insertAction(type, ctx) {
    var bgColor, txtColor
    if (type == "error") {
        bgColor = "#ff270014"
        txtColor = "#b11b00"
    } else if (type == "succeed") {
        bgColor = "#00ff8a14"
        txtColor = "#009664"
    }

    insert_action_alert.style.display = "block"
    insert_action_alert.style.backgroundColor = bgColor
    insert_action_alert.style.color = txtColor
    insert_action_alert.querySelector('span').innerHTML = ctx

    document.addEventListener('click', function(e){   
        if (!document.getElementById('insert-card').contains(e.target)){
            insert_action_alert.style.display = "none" // click outside card
        }
      });
}

function editAction(type, ctx) {
    var bgColor, txtColor
    if (type == "error") {
        bgColor = "#ff270014"
        txtColor = "#b11b00"
    } else if (type == "succeed") {
        bgColor = "#00ff8a14"
        txtColor = "#009664"
    }

    edit_action_alert.style.display = "block"
    edit_action_alert.style.backgroundColor = bgColor
    edit_action_alert.style.color = txtColor
    edit_action_alert.querySelector('span').innerHTML = ctx

    // setTimeout(() => {edit_action_alert.style.display = "none"}, 3000)

    document.addEventListener('click', function(e){   
        if (!document.getElementById('edit-card').contains(e.target)){
            edit_action_alert.style.display = "none" // click outside card
        }
      });
}

function deleteAction(type, ctx) {
    var bgColor, txtColor
    if (type == "error") {
        bgColor = "#ff270014"
        txtColor = "#b11b00"
        ctx = '✖ Xoá không thành công: ' + ctx
    } else if (type == "succeed") {
        bgColor = "#00ff8a14"
        txtColor = "#009664"
        ctx = '✔ Xoá thành công: ' + ctx
    }

    delete_action_alert.innerHTML = `<p style="font-size:1.1em; font-weight: 400; text-align:center; margin-top:20px; padding:10px; border-radius:10px; background-color:${bgColor}; color:${txtColor}">${ctx}</p>`
    delete_confirm.style.display = 'none'
    delete_cancel.style.display = 'none'
}

function editTabAction(e) {

    refreshHighlightRow()
    
    edit_tab.click()

    const input_box = document.querySelectorAll('#edit-card .edit-row .input-box')
    const row = e.parentNode.parentNode.getElementsByTagName('td')

    for (let i=0; i<input_box.length; i++) {
        const input_old = input_box[i].querySelector('input') // get first box only 
        input_old.value = row[i].textContent
    }

    for (i of row) {
        i.style.backgroundColor = "#005b9817"
        i.style.color = "#00406b"
    }
    
}

function deleteAlert(e) {

    alert_container.style.display = "block"
    alert_container.style.animationName = "fadeInOpacity"
    alert_container.style.animationTimingFunction = "ease"
    alert_container.style.animationDuration = "0.3s"

    const display_content = document.querySelector('.alert-display .display__content')
    const row = e.parentNode.parentNode.getElementsByTagName('td')

    var ctx = "<b>Bạn có chắc muốn xoá dòng</b> <br><br>"

    for (i of row) 
    {
        i.style.color = "#6b0000"
        i.style.backgroundColor = "#f6e8e8"

        if (!i.className.includes('table-action')) {
            deleteArr.push(i.textContent)
            ctx += i.textContent + " | "

        }
    }

    display_content.innerHTML = ctx
}

function cancelAction() {

    alert_container.style.display = "none"
    delete_action_alert.innerHTML = null
    delete_confirm.style.display = 'inline-block'
    delete_cancel.style.display = 'inline-block'

    refreshHighlightRow()
}

overlay.addEventListener('click', cancelAction)

delete_cancel.addEventListener('click', cancelAction)
