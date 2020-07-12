document.querySelectorAll('#searchform #s')
    .forEach(item => {
        item.className += ' form-control mb-2'
    })
document.querySelectorAll('#searchsubmit')
    .forEach(item => {
        item.className += ' btn btn-primary btn-block'
    })

const widgetsList = document.querySelector('.ptwpsoftdevtheme-widget ul')
widgetsList.className += ' list-group';
widgetsList.querySelectorAll('li')
    .forEach(item => {
        item.className += 'list-group-item'
    })


// Comments styling
const commentsButton = document.querySelector('.form-submit #submit')
if (commentsButton) {
    commentsButton.className = 'btn btn-primary'
}

const inputTextArea = document.querySelector('.comment-form-comment textarea')
if (inputTextArea) {
    inputTextArea.className = 'form-control'
    inputTextArea.setAttribute('placeholder', 'Ingresa aquí tu comentario*')
}

const newComment = document.querySelector('#commentform')
if (newComment
    && newComment.querySelector('.comment-form-author label')
    && newComment.querySelector('.comment-form-author input')
    && newComment.querySelector('.comment-form-email label')
    && newComment.querySelector('.comment-form-email input')
    && newComment.querySelector('.comment-form-url label')
    && newComment.querySelector('.comment-form-url input')
) {

    newComment.querySelector('.comment-form-author label').className = 'd-none'
    newComment.querySelector('.comment-form-author input').className = 'form-control'
    newComment.querySelector('.comment-form-author input').setAttribute('placeholder', 'Nombre*')

    newComment.querySelector('.comment-form-email label').className = 'd-none'
    newComment.querySelector('.comment-form-email input').className = 'form-control'
    newComment.querySelector('.comment-form-email input').setAttribute('placeholder', 'Email*')

    newComment.querySelector('.comment-form-url label').className = 'd-none'
    newComment.querySelector('.comment-form-url input').className = 'form-control'
    newComment.querySelector('.comment-form-url input').setAttribute('placeholder', 'Sitio web')

}

const editCommentButton = document.querySelectorAll('.comment-edit-link')
if (editCommentButton) {
    editCommentButton.forEach(boton => {
        boton.className = 'btn btn-outline-warning btn-sm'
    })
}

const replyCommentButton = document.querySelectorAll('.comment-reply-link')
if (replyCommentButton) {
    replyCommentButton.forEach(boton => {
        boton.className = 'btn btn-outline-primary btn-sm'
    })
}
