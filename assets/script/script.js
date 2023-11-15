let list = document.querySelector('.navigation-dash li');
function activeLink(){
    list.forEach((item) =>
    item.classlist.remove('hovered'));
    this.classlist.add('hovered');
}
list.forEach((item) =>
item.addEventListener('mouseover',activelink));



    /* NAV-DASHBOARD */

let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
    
toggle.onclick = function(){
navigation.classlist.toggle('active');
main.classlist.toggle('active');
}