<?php 
session_start();

if (isset($_SESSION['USERNAME']) && isset($_SESSION['PASSWORD'])) {?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel="stylesheet" type="text/css" href="../expand/css/header.css">
        <link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-bold-rounded.css'>
        <title>Dashboard</title>
    </head>
    
    <body>
        <div id="main">
            <div class="sidebar-container">
                <div class="sidebar">
                    <div class="sidebar__title">
                        <h2>SCORE</h2>
                        <img src="../img/logo.png" alt="logo">
                    </div>
                    <div class="sidebar__content">
                        <h3>Các mục</h3>
                        <ul>
                            <li class="section">
                                <i class="fi fi-rr-home"></i>
                                <a href="../home_page" class="title">Trang chủ</a>
                            </li>
                            <li class="section">
                                <i class="fi fi-rr-search-alt"></i>
                                <a href="../docs_page" class="title">Tài liệu</a>
                            </li>
                            <li class="section">
                                <i class="fi fi-rr-search"></i>
                                <a href="../search_page" class="title">Tra cứu</a>
                            </li>
                            <li class="section">
                                <i class="fi fi-rr-bulb"></i>
                                <a href="../filter_page" class="title">Đề xuất</a>
                            </li>
                            <li class="section">
                                <i class="fi fi-rr-chart-histogram"></i>
                                <a href="../visualization_page" class="title">Phân tích</a>
                            </li>
                            <li class="section">
                                <i class="fi fi-rr-document-signed"></i>
                                <a href="../printing_page" class="title">Báo cáo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__action">
                        <a href="logout.php" style="text-decoration: none;">
                            <i class="fi fi-br-sign-out-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="board-container">
                <div class="board__title">
                    <h3>Dashboard</h3>
                    <div class="switcher">         
                        <div class="mode">
                            <div class="light">
                                <i class="fi fi-br-sun"></i>
                            </div>
                            <div class="dark">
                                <i class="fi fi-br-moon"></i>
                            </div>
                        </div>
                        <div class="toggle-box"></div>

                    </div> 
                </div>

                <div class="board__tab">
                    <section id="section" class="tab-active">
                        <div class="title" onclick="switchTab(this)">Trường</div>
                    </section>
                    <section id="section">
                        <div class="title" onclick="switchTab(this)">Điểm chuẩn</div>
                    </section>
                    <section id="section">
                        <div class="title" onclick="switchTab(this)">Chỉ tiêu</div>
                    </section>
                    <section id="section">
                        <div class="title" onclick="switchTab(this)">Nguyện vọng</div>
                    </section>
                    <section id="section">
                        <div class="title" onclick="switchTab(this)">Loại trường</div>
                    </section>
                </div>
            
                <div class="board__content">
                    <div class="filter-container">
                        <nav class="filter__tab">
                            <section id="display-tab" class="tab-active">
                                <div class="title">Hiển thị</div>
                            </section>
                            <section id="edit-tab">
                                <div class="title">Sửa</div>
                            </section>
                            <section id="insert-tab">
                                <div class="title">Chèn</div>
                            </section>
                        </nav>

                        <div class="filter__show card-active" id="display-card">
                            <input type="checkbox" name="" id="search-checkbox" hidden>
                            <div class="show__basic">
                                <label for="search-checkbox">
                                    <i class="fi fi-br-cross"></i>
                                </label>
                                <div class="card-header">
                                    <h3>Tìm kiếm</h3>
                                </div>
                                <div class="input-box row">
                                    <div class="input__column addition">
                                        <span>Dòng hiển thị</span>
                                    </div>
                                    <input type="number" class="input__value" value="30">
                                </div>
                                <input type="button" value="Lọc" class="basic-search input__btn">
                            </div>

                            <input type="checkbox" name="" id="customize-checkbox" hidden>
                            <div class="show__advanced">
                                <label for="customize-checkbox">
                                    <i class="fi fi-br-cross"></i>
                                </label>
                                <div class="card-header">
                                    <h3>Trình bày</h3>
                                </div>
                                <div class="display-column">
                                    <h3>Cột hiển thị</h3>

                                </div>
                                <div class="row-limit input-box">
                                    <div class="input__column">
                                        <span>Số dòng/trang</span>
                                    </div>
                                    <input type="number" class="input__value" value="30" min="1" max="30" style="width:45%">
                                </div>
                                <div class="page-num input-box">
                                    <div class="input__column">
                                        <span>Trang thứ</span>
                                    </div>
                                    <input type="number" class="input__value" value="1" min="1" style="width:45%">
                                </div>
                                <div class="sorting-box">
                                    <h3>Sắp xếp theo</h3>
                                    <section>
                                        <div class="dropdown-box" style="width: 5em">
                                            <input type="checkbox" name="" id="dropdown-checkbox1" hidden>
                                            <label for="dropdown-checkbox1">
                                                <div class="dropdown__title">
                                                    <span>ASC</span>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                            </label>
                                            <div class="dropdown__list list-scroll">
                                                <ul>
                                                    <li class="list-item">ASC</li>
                                                    <li class="list-item">DESC</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-box" style="width: 10em">
                                            <input type="checkbox" name="" id="dropdown-checkbox2" hidden>
                                            <label for="dropdown-checkbox2">
                                                <div class="dropdown__title">
                                                    <span>MA_TRUONG</span>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                            </label>
                                            <div class="dropdown__list list-scroll">
                                                <ul>
                                                    <li class="list-item">MA_TRUONG</li>
                                                    <li class="list-item">TEN_TRUONG</li>
                                                    <li class="list-item">TINH/TP</li>
                                                    <li class="list-item">QUAN/HUYEN</li>
                                                    <li class="list-item">MA_LOAI</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <input type="button" value="Hiện" class="advanced-search input__btn">
                            </div>
                        </div>

                        <div class="filter__show" id="edit-card">
                            <input type="checkbox" name="" id="edit-checkbox" hidden>
                            <div class="show__basic list-scroll">
                                <label for="edit-checkbox">
                                    <i class="fi fi-br-cross"></i>
                                </label>
                                <div class="card-header">
                                    <h3>Chỉnh sửa</h3>
                                </div>
                                <div class="edit-row">
                                </div>
                                <div class="action-alert">
                                    <span>Lỗi</span>
                                </div>
                                <input type="button" value="Thay đổi" class="edit-btn input__btn" style="width: 7em; padding: 8px 5px; margin-top: 30px">
                            </div>
                        </div>

                        <div class="filter__show" id="insert-card">
                            <input type="checkbox" name="" id="insert-checkbox" hidden>
                            <div class="show__basic list-scroll">
                                <label for="insert-checkbox">
                                    <i class="fi fi-br-cross"></i>
                                </label>
                                <div class="card-header">
                                    <h3>Thêm dữ liệu</h3>
                                </div>
                                <div class="insert-row">
                                    <div style="width: 100%; border-top: 3px solid var(--third-primary-color); margin: 30px 0;" class="line1">
                                    </div>
                                </div>
                                <div class="action-alert">
                                    <span>Số lượng mục quá ít để xoá</span>
                                </div>
                                <div class="add-insert add-box" onclick="addInsert()">
                                    <i class="fi fi-br-add"></i>
                                    <span>Thêm mục</span>
                                </div>
                                <div class="remove-insert remove-box" onclick="removeInsert()">
                                    <i class="fi fi-br-cross-circle"></i>
                                    <span>Xoá mục</span>
                                </div>
                                <input type="button" value="Thêm" class="insert-btn input__btn" style="width: 7em; padding: 8px 5px">
                            </div>
                        </div>
                    </div>
                    <section>
                        <!-- <h3>Trường</h3> -->
                        <div class="school-board">
                        </div>
                    </section>
                </div>
            </div>

            <div class="alert-container">
                <div class="overlay"></div>
                <div class="alert-display">
                    <p class="display__content"></p>
                    <div class="display__confirm">
                        <input type="button" value="OK" class="delete-confirm">
                        <input type="button" value="Huỷ bỏ" class="delete-cancel">
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="../expand/js/toggle-mode.js"></script>
    <script type="text/javascript" src="./js/create_list.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">

        const default_limit = parseInt(document.querySelector('.row-limit input').value)
        const default_page = parseInt(document.querySelector('.page-num input').value)
        const default_table = table_dict[$('.board__tab #section.tab-active .title').text()]
        const default_order = column_dict[default_table][0]
        var deleteArr = []

        function switchTab(e) {

            e.parentNode.parentNode.querySelectorAll('#section').forEach(i => {
                if (i.className.includes('tab-active')) {
                    i.classList.remove('tab-active')
                }
            })
            e.parentNode.classList.toggle('tab-active')

            const table = table_dict[e.textContent]
            const order = column_dict[table][0] + ' ASC'

            removeCol()
            createCol(column_dict[table])
            columnAction()

            $.ajax({
                url:"search.php",
                method:"POST",
                data:{table: table,
                    col_list: column_dict[table],
                    limit: default_limit,
                    page: default_page,
                    query:'',
                    order:order},
                success:function(data) {
                    $('.school-board').html(data);
                }
            });
        }

	    $(document).ready(function(){

            function onLoad() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                const cols = column_dict[table]
                const order = column_dict[table][0]
                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{table: table,
                        col_list: cols,
                        limit: default_limit,
                        page: default_page,
                        query:'',
                        order:order},
                    success:function(data) {
                        $('.school-board').html(data);
                    }
                });
            }

            onLoad()

            $(document).on('click', '.basic-search', function() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                const cols = column_dict[table]
                const order = column_dict[table][0] + ' ASC'
                var row_limit = parseInt($('.input-box.row input').val())

                if (isNaN(row_limit)) {
                    row_limit = 30
                    $('.input-box.row input').val('30')

                }

                const input = $(this).parent().find(".input-box input")
                var query = "WHERE ("

                for (let i=0; i<cols.length; i++) {
                    if (i != cols.length-1) {
                        query += cols[i] + ' LIKE ' + `'%${input[i].value.trim()}%'` + ' AND '
                    } else {
                        query += cols[i] + ' LIKE ' + `'%${input[i].value.trim()}%'` + ')'
                    }
                    
                }

                // console.log(query)
                // console.log(table)

                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{table: table,
                        col_list: cols,
                        limit: row_limit,
                        page: 1,
                        query:query,
                        order:order},
                    success:function(data) {
                        $('.school-board').html(data);
                    }
                });
            })

            $(document).on('click', '.advanced-search', function() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                var columns = []
                document.querySelectorAll('.column-select').forEach(i => {
                    if (!i.className.includes('disable')) {
                        columns.push('`' + i.querySelector('span').textContent + '`')
                    }
                })
             
                const limit = parseInt($('.row-limit input').val())
                const page = parseInt($('.page-num input').val())
                const order = '`' + document.querySelectorAll('.sorting-box .dropdown__title span')[1].textContent + '` ' + document.querySelectorAll('.sorting-box .dropdown__title span')[0].textContent

                $.ajax({
                    url:"search.php",
                    method:"POST",
                    data:{table: table,
                        col_list: columns,
                        limit: limit,
                        page: page,
                        query:'',
                        order:order},
                    success:function(data) {
                        $('.school-board').html(data);
                    }
                });

            })

            $(document).on('click', '.edit-btn', function() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                var query = ''

                const col = document.querySelectorAll('#edit-card .input__column span')
                const old_value = document.querySelectorAll('#edit-card .input-box .old-value')
                const new_value = document.querySelectorAll('#edit-card .input-box .new-value')

                for (let i=0; i<col.length; i++) {
                    const col_val = col[i].textContent.trim()
                    const old_val = old_value[i].value.trim()
                    const new_val = new_value[i].value.trim()

                    if (old_val != new_val && new_val != '') {
                        if (i != col.length-1) {
                            query += '`' + col_val + '`=' + `'${new_val}', `
                        } else {
                            query += '`' + col_val + '`=' + `'${new_val}'`
                        }

                    }
                }

                if (query != '') {

                    query += 'WHERE ('
                    for (let i=0; i<col.length; i++) {
                        const col_val = col[i].textContent.trim()
                        const old_val = old_value[i].value.trim()

                        if (i != col.length-1) {
                            query += '`' + col_val + '`=' + `'${old_val}' AND `
                        } else {
                            query += '`' + col_val + '`=' + `'${old_val}') `
                        }
                    }


                    $.ajax({
                        url:"edit.php",
                        method:"POST",
                        data:{
                            table: table,
                            query: query
                            },
                        success:function(data) {
                            $('.school-board').html(data);
                            onLoad();
                        }
                    });
                } else {
                    onLoad()
                }

            })

            $(document).on('click', '.insert-btn', function() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                const col = document.querySelector('#insert-card .insert-row').querySelectorAll('.input-box .input__column span')
                const row = document.querySelectorAll('#insert-card .insert-row')
                var query = '('

                for (let i=0; i<col.length; i++) {
                    if (i != col.length-1) {
                        query += '`' + col[i].textContent + '`, '
                    } else {
                        query += '`' + col[i].textContent + '`) '
                    }
                }

                query += 'VALUES '
                for (let i=0; i<row.length; i++) {
                    const box = row[i].querySelectorAll('.input-box input')
                    var record = '('

                    for (let j=0; j<box.length; j++) {
                        if (j != box.length-1) {
                            record += `'${box[j].value}', `
                        } else {
                            record += `'${box[j].value}'`
                        }
                        
                    }

                    if (i != row.length-1) {
                        record += '), '
                    } else {
                        record += ') '
                    }

                    if (record == "('', '', '', '', '')") {record=""}
                    
                    query += record
                }

                console.log(query)

                if (query.slice(-7) != "VALUES "){
                    $.ajax({
                        url:"insert.php",
                        method:"POST",
                        data:{
                            table: table,
                            query: query
                            },
                        success:function(data) {
                            $('.school-board').html(data);
                            onLoad();
                        }
                    });
                } else {
                    onLoad()
                }
                


                
            })

            $(document).on('click', '.delete-confirm', function() {
                const table = table_dict[$('.board__tab #section.tab-active .title').text()]
                const col = document.querySelectorAll('#edit-card .input__column span')
                var query = ''

                for(let i=0; i<col.length; i++) {
                    const col_val = col[i].textContent.trim()

                    if (i!=col.length-1) {
                        query += '`' + col_val + '`=' + `'${deleteArr[i]}'` + ' AND '
                    } else {
                        query += '`' + col_val + '`=' + `'${deleteArr[i]}'`
                    }

                }

                
                $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{
                        table: table,
                        query: query
                        },
                    success:function(data) {
                        $('.school-board').html(data);
                        onLoad();
                        deleteArr = []
                    }
                });


            })

            $(document).on('change', '.page-num', function() {
                $('.advanced-search').click()
            })

            $(document).on('change', '.row-limit', function() {
                $('.advanced-search').click()
            })

        })
    </script>

    </html>
<?php
} else {
    header("location: index.php");
    exit();
}
?>

