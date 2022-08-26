const table_dict = {
    'Trường': 'truong',
    'Điểm chuẩn': 'diem_chuan',
    'Chỉ tiêu': 'chi_tieu',
    'Nguyện vọng': 'nguyen_vong',
    'Loại trường': 'loai_truong'
}

const column_dict = {
    'truong' : ['`MA_TRUONG`', '`TEN_TRUONG`', '`TINH/TP`', '`QUAN/HUYEN`', '`MA_LOAI`'],
    'diem_chuan': ['`NAM_HOC`', '`MA_TRUONG`', '`MA_NV`', '`DIEM`'],
    'chi_tieu': ['`NAM_HOC`', '`MA_TRUONG`', '`MA_NV`', '`CHI_TIEU`', '`SO_LUONG`'],
    'nguyen_vong': ['`MA_NV`', '`TEN_NV`'],
    'loai_truong': ['`MA_LOAI`', '`TEN_LOAI`', '`HINH_THUC`']
}


// const basic_search_column = document.querySelectorAll('#display-card .input-box span')
// const display_column = document.querySelectorAll('#customize-checkbox .column-select span')


function createCol(lst) {

    function createBasic(item) {
        const basic_search_column = document.createElement('div')
        const input_column = document.createElement('div')
        const input_title = document.createElement('span')
        const input_value = document.createElement('input')
    
        basic_search_column.setAttribute('class', 'input-box')
    
        input_column.setAttribute('class', 'input__column')
        input_title.innerHTML = item.replaceAll('`', '')
        input_column.appendChild(input_title)
    
        input_value.setAttribute('type', 'text')
        input_value.setAttribute('class', 'input__value')
    
        basic_search_column.appendChild(input_column)
        basic_search_column.appendChild(input_value)

        basic_search.insertBefore(basic_search_column, row)
    }

    function createAdvanced(item) {
        const column_select = document.createElement('div')
        const icon = document.createElement('i')
        const title = document.createElement('span')

        column_select.setAttribute('class', 'column-select input__column')

        icon.setAttribute('class', 'fi fi-br-circle-small')
        title.innerHTML = item.replaceAll('`', '')

        column_select.appendChild(icon)
        column_select.appendChild(title)

        advanced_search.appendChild(column_select)
    }

    function createEdit(item) {
        const edit_column = document.createElement('div')
        const input_column = document.createElement('div')
        const input_title = document.createElement('span')
        const value_old = document.createElement('input')
        const value_new = document.createElement('input')
        const icon = document.createElement('i')
    
        edit_column.setAttribute('class', 'input-box')
    
        input_column.setAttribute('class', 'input__column')
        input_title.innerHTML = item.replaceAll('`', '')
        input_column.appendChild(input_title)
    
        value_old.setAttribute('type', 'text')
        value_old.setAttribute('class', 'old-value input__value')
        value_old.setAttribute('placeholder', 'Cũ...')

        icon.setAttribute('class', 'fi fi-br-arrows-h')

        value_new.setAttribute('type', 'text')
        value_new.setAttribute('class', 'new-value input__value')
        value_new.setAttribute('placeholder', 'Mới...')
    
        edit_column.appendChild(input_column)
        edit_column.appendChild(value_old)
        edit_column.appendChild(icon)
        edit_column.appendChild(value_new)

        edit.appendChild(edit_column)
    }

    function createInsert(item) {
        const insert_column = document.createElement('div')
        const input_column = document.createElement('div')
        const input_title = document.createElement('span')
        const input_value = document.createElement('input')
    
        insert_column.setAttribute('class', 'input-box')
    
        input_column.setAttribute('class', 'input__column')
        input_title.innerHTML = item.replaceAll('`', '')
        input_column.appendChild(input_title)
    
        input_value.setAttribute('type', 'text')
        input_value.setAttribute('class', 'input__value')
    
        insert_column.appendChild(input_column)
        insert_column.appendChild(input_value)

        insert.insertBefore(insert_column, line1)

    }

    function createDropdown(item) {
        const value = document.createElement('li')

        value.setAttribute('class', 'list-item')
        value.innerHTML = item.replaceAll('`', '')
        
        dropdown_list.appendChild(value)
    }


    const basic_search = document.querySelector('#display-card .show__basic')
    const row = document.querySelector('.input-box.row')
    const advanced_search = document.querySelector('#display-card .show__advanced .display-column')
    const dropdown_title = document.querySelectorAll('.dropdown__title span')[1]
    const dropdown_list = document.querySelectorAll('.dropdown__list ul')[1]
    const edit = document.querySelector('#edit-card .edit-row')
    const insert = document.querySelector('#insert-card .insert-row')
    const line1 = document.querySelector('.line1')

    for (i of lst) {

        createBasic(i)
        createAdvanced(i)
        createDropdown(i)
        createEdit(i)
        createInsert(i)

    }

    dropdown_title.innerHTML = lst[0].replaceAll('`', '')

}

function removeCol() {
    const basic_search = document.querySelectorAll('#display-card .show__basic .input-box')
    const dropdown_title = document.querySelectorAll('.dropdown__title span')[1]
    const dropdown_list = document.querySelectorAll('.dropdown__list ul')[1].querySelectorAll('li')
    const advanced_search = document.querySelectorAll('#display-card .show__advanced .display-column .column-select')
    const edit = document.querySelectorAll('#edit-card .edit-row .input-box')
    const insert = document.querySelectorAll('#insert-card .insert-row')

    basic_search.forEach(i => {
        if (i.className == "input-box") {
            i.remove()
        }
    })

    advanced_search.forEach(i => {
        i.remove()
    })

    dropdown_title.innerHTML = ''
    dropdown_list.forEach(i => {
        i.remove()
    })

    edit.forEach(i => {
        i.remove()
    })

    insert.forEach(i => {
        i.remove()
    })

    const insert_row = document.createElement('div')
    const line1 = document.createElement('div')

    line1.setAttribute('class', 'line1')
    line1.setAttribute('style', 'width: 100%; border-top: 3px solid var(--third-primary-color); margin: 30px 0;')
    insert_row.setAttribute('class', 'insert-row')

    insert_row.appendChild(line1)

    document.querySelector('#insert-card .show__basic').insertBefore(insert_row, document.querySelector('#insert-card .action-alert'))


}

createCol(column_dict['truong'])
