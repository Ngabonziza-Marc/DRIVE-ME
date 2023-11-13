let list = document.querySelectorAll('.navigation-dash li');
function activeLink(){
    list.forEach((item) =>
    item.classlist.remove('hovered'));
    this.classlist.add('hovered');
}
list.forEach((item) =>
item.addEventListener('mouseover',activelink));