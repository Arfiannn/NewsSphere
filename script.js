// script untuk menghubung api ke halaman home
const apiKey = '3321af01b68c4057bd7c5eaa451f597c';
const container = document.querySelector('.container');
const optionsContainer = document.querySelector('.options-container');
const country = 'jp';
const options = ['general', 'entertainment', 'health', 'science', 'sports', 'technology'];

let requestURL;

const generateUI = (articles) => {
container.innerHTML = '';
    for (let item of articles) {
    let card = document.createElement('div');
    card.classList.add('news-card');
    card.innerHTML = `<div class="news-image-container">
    <img src="${item.urlToImage || './newspaper.jpg'}" alt="News Image" />
    </div>
    <div class="news-content">
    <div class="news-title">
        ${item.title}
    </div>
    <div class="news-description">
    ${item.description || item.content || ''}
    </div>
    <a href="${item.url}" target="_blank" class="view-button">Read More</a>
    </div>`;
    container.appendChild(card);
}
};


const getNews = async () => {
container.innerHTML = '';
try {
    let response = await fetch(requestURL, { mode: 'cors' });
    if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
    }
    let data = await response.json();
    generateUI(data.articles);
} catch (error) {
    console.error('Error fetching data:', error);
    alert('Data unavailable at the moment. Please try again later');
}
};

const selectCategory = (e, category) => {
let options = document.querySelectorAll('.option');
options.forEach((element) => {
    element.classList.remove('active');
});
requestURL = `https://newsapi.org/v2/top-headlines?country=${country}&category=${category}&apiKey=${apiKey}`;
e.target.classList.add('active');
getNews();
};

const createOptions = () => {
for (let i of options) {
    if (i !== '') { 
    let button = document.createElement('button');
    button.classList.add('option');
    button.textContent = i;
    button.addEventListener('click', (e) => selectCategory(e, i));
    optionsContainer.appendChild(button);
    }
}
};

const init = () => {
optionsContainer.innerHTML = '';
createOptions();
getNews();
};


window.onload = () => {
requestURL = `https://newsapi.org/v2/top-headlines?country=${country}&category=general&apiKey=${apiKey}`;
init();
};
