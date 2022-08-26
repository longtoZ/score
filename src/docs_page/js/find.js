function fetchData(method, url, query) {

    const pattern = new RegExp(query, 'gi')

    const queryRange = ['li', 'p', 'h3']

    const xhr = new XMLHttpRequest();
    xhr.open(method, url, true)
    xhr.responseType = 'document'
    xhr.timeout = 10000

    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {

            var pageIsCount = false

            const pageHeader = document.createElement('h2')
            contentContainer.appendChild(pageHeader)

            const res = xhr.responseXML.querySelectorAll('section')
            res.forEach(elements => {
                var shouldAdd = false
                const section = document.createElement('section')
                const header = document.createElement('a')
                const list = document.createElement('ul')

                header.setAttribute('href', url + '#' + elements.id)
                header.innerHTML = elements.querySelector('h2').textContent.replace("¶", "")

                for (const tag of queryRange) {
                    elements.querySelectorAll(tag).forEach(i => {
                        if (pattern.test(i.textContent)) {
                            count += 1
                            shouldAdd = true
                            const content = document.createElement('li')
            
                            content.innerHTML = i.textContent.replace(pattern, `<mark>${query}</mark>`)
                            
                            list.appendChild(content)
                        }
                    })
                }

                if (shouldAdd) {
                    section.appendChild(header)
                    section.appendChild(list)
                    contentContainer.appendChild(section)

                    pageHeader.setAttribute('class', 'page-header')
                    pageHeader.innerHTML = xhr.responseXML.querySelector('title').innerHTML

                    if (pageIsCount == false) {
                        countPage += 1
                        pageIsCount = true
                    }
                }
            })

            document.querySelector('.result-count').innerHTML = `Kết quả trùng khớp: ${count}, số trang: ${countPage}` 

        } else {
            console.error('Failed to fetch data...')
        }
        
    }

    xhr.ontimeout = function() {
        console.error('Timeout!')
    }
    xhr.onerror = function() {
        console.error(xhr.status, xhr.statusText)
    }

    xhr.send()

    // console.log(url)

}

const params = (new URL(document.location)).searchParams;
const query = params.get('q')

const contentContainer = document.querySelector('.content-container')

var countPage = 0
var count = 0
const resultCount = document.createElement('h4')
resultCount.setAttribute('class', 'result-count')
resultCount.innerHTML = `Kết quả trùng khớp: ${count}, số trang: ${countPage}` 
contentContainer.appendChild(resultCount)

setTimeout(() => {fetchData("GET", "index.php", query)}, 500)
setTimeout(() => {fetchData("GET", "overview.html", query)}, 600)
setTimeout(() => {fetchData("GET", "search_page.html", query)}, 700)
setTimeout(() => {fetchData("GET", "filter_page.html", query)}, 800)
setTimeout(() => {fetchData("GET", "visualization_page.html", query)}, 900)
setTimeout(() => {fetchData("GET", "printing_page.html", query)}, 1000)

setTimeout(() => {fetchData("GET", "references.html", query)}, 1100)
setTimeout(() => {fetchData("GET", 'changelog.html', query)}, 1200)
setTimeout(() => {fetchData("GET", 'error_page.html', query)}, 1300)
    
