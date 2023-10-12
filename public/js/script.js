function showMenu() {
    var navList = document.querySelector('.nav-list');
    var closeIcon = document.querySelector('.close');
    // Toggle the 'active' class on the nav-list to show/hide it
    navList.classList.toggle('active');
    closeIcon.style.display = 'block';

}
function closeMenu(){
    var navList = document.querySelector('.nav-list');
    var menuIcon = document.querySelector('.menu.icon');

    navList.classList.remove('active');
    menuIcon.style.display = 'block';
}

function maxDescription(){
    const descriptions = document.querySelectorAll('.description');

    descriptions.forEach(function(description) {
        const sentences = description.textContent.split('.');
        const firstSentence = sentences[0] + (sentences.length > 1 ? '.' : '');
        description.textContent = firstSentence;
    });
}

function chooseLanguage(){
    var select = document.getElementById('guide_languages');
    if (select) {
        new MultiSelectTag('guide_languages', {
            rounded: true,
            shadow: true,
            placeholder: 'Search',
            onChange: function(values) {
                console.log(values);
            }
        });
    }
}

function applyTableStyles(selector) {
    // if (window.innerWidth > 600) return false;
    const tableEl = document.querySelector(selector);
    const thEls = tableEl.querySelectorAll('thead th');
    const tdLabels = Array.from(thEls).map(el => el.innerText);
    tableEl.querySelectorAll('tbody tr').forEach(tr => {
        Array.from(tr.children).forEach((td, ndx) => td.setAttribute('label', tdLabels[ndx]));
    });
}



document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.querySelector('#menuToggle');
    var closeIcon = document.querySelector('.close.icon');

    // ------- NAVIGATION -------
    menuToggle.addEventListener('click', function(event) {
        showMenu();
    });

    closeIcon.addEventListener('click', function() {
       closeMenu();
    });

    maxDescription();
    chooseLanguage();
    applyTableStyles('.table')
})

