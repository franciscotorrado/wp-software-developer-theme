document.querySelector('#searchform #s').className += ' form-control mb-2';
document.querySelector('#searchsubmit').className += ' btn btn-primary btn-block';

const widgetsList = document.querySelector('.ptwpsoftdevtheme-widget ul');
widgetsList.className += ' list-group';
widgetsList.querySelectorAll('li')
    .forEach(item => {
        item.className += 'list-group-item'
    });
