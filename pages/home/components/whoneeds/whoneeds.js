const tPlusItems = [...document.getElementsByClassName('t-plus')];

function onClickPlusesItem(target, index) {
    tPlusItems[index].classList.toggle('t-active');
    target.classList.toggle('btn-active');
}