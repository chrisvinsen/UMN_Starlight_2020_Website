let current_date = new Date();

let venicea_start = new Date(2020, 7, 31); // 31 Agustus 2020
let venicea_end = new Date(2020, 9, 10); // 10 Oktober 2020
let mardi_gras = new Date(2020, 10, 6) // 6 November 2020
let rio_de_janeiro = new Date(2020, 10, 21) // 21 November 2020

let use_date

let countdown = document.querySelector('.countdown-up-area')
let title = document.querySelector('.countdown-up-area h6')
let subtitle = document.querySelector('.countdown-up-area h4')

if (current_date < venicea_start) {
    title.textContent = 'First Stage';
    subtitle.textContent = 'Venicea Stage Begins';
} else if (current_date < venicea_end) {
    title.textContent = 'First Stage';
    subtitle.textContent = 'Venicea Stage Ends';
} else if (current_date < mardi_gras) {
    title.textContent = 'Second Stage';
    subtitle.textContent = 'Mardi Gras Stage Begins';
} else if (current_date < rio_de_janeiro) {
    title.textContent = 'Final Stage';
    subtitle.textContent = 'Rio de Janeiro Stage Begins';
} else {
    countdown.style.display = 'none';
}