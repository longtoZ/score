if (document.querySelector('.school__pro').className.includes('school-active')) {
    document.querySelector('.search-table thead').classList.toggle('switch-type');
    document.querySelector('.search-table tbody tr:last-of-type').classList.toggle('switch-type');
    document.querySelectorAll('.search-table tbody tr td:first-of-type').forEach(i=>{
        i.classList.toggle('switch-type')
    });
}