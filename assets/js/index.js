const searchForm = document.querySelector('#searchform #s');
searchForm.className += ' form-control mb-2';

const searchButton = document.querySelector('#searchsubmit');
searchButton.className += ' btn btn-primary btn-block';

const widgetsList = document.querySelector('.ptwpsoftdevtheme-widget ul');
widgetsList.className += ' list-group';
widgetsList.querySelectorAll('li')
    .forEach(item => {item.className += 'list-group-item'});
