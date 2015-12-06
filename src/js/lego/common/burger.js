//=require side-menu.js
//Появляющееся слева меню
const navMenuCollapse = document.getElementById(`nav-menu-collapse`);

$(`#navbar-burger`).sideMenu(() => {
	"use strict";
	//Логика при появлении черной подложки
	navMenuCollapse.className += ` nav-menu-collapse--show`;
}, () => {
	"use strict";
	//Логика при исчезновении черной подложки
	navMenuCollapse.className = `nav-menu-collapse`;
});