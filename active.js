/**
 * Small script to track the active page, 
 */
// Initial active page is about
let active = 'about'

/**
 * Clears the content currently within the
 */
const clearContent = function () {
    const content = document.getElementById('content')
    content.innerHTML = ''
}

const populateContent = function (data) {
    const content = document.getElementById('content')
    content.innerHTML = data
}
/**
 * Fetches the html content to be loaded into the container
 * @param {*} filename the location of the html file
 */
const loadHTML = function (filename) {
    return new Promise((resolve,reject) => {
        const req = new XMLHttpRequest();
        req.open('GET', filename)

        req.onload = () => {
            if (req.status == 200) {
                resolve(req.responseText)
            } else {
                reject({
                    status: req.status,
                    statusText: req.statusText
                })
            }
        }

        req.onerror = () => {
            reject({
                status: req.status,
                statusText: req.statusText
            })
        }

        req.setRequestHeader('Allow-Access-Control-Origin', '*')
        req.send();
    })
}

/**
 * Indicates a click on a nav item
 * @param {*} id 
 */
async function action (event) {
    const clicked = document.getElementById(event.target.id)
    clicked.className = 'active'
    const old = document.getElementById(active)
    old.className = ''
    active = event.target.id

    clearContent()
    let filepath = ''
    switch (event.target.id) {
        case 'about':
            filepath = 'about.html'
            break;
        case 'blog':
            filepath = 'blog.html'
            break;
        case 'contact':
            filepath = 'contact.html'
            break;
        default:
            filepath = 'about.html'
    }

    const content = await loadHTML(filepath)
    populateContent(content)
}

function run () {
    document.getElementById('about').addEventListener('click',action)
    document.getElementById('blog').addEventListener('click',action)
    document.getElementById('contact').addEventListener('click',action)
}