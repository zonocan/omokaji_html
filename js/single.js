const table_of_contents_accordion_triger_btn = document.querySelector('.table-of-contents-accordion-triger-btn');
const table_of_contents_accordion = document.querySelector('.table-of-contents-accordion');
table_of_contents_accordion_triger_btn.addEventListener('click', () => {
  slideToggle(table_of_contents_accordion, 300);  
  table_of_contents_accordion_triger_btn.classList.toggle('active');
});