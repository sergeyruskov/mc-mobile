$.fn.sideMenu = function(logicShowMenu = () => {}, logicHideMenu = () => {}) {
	const self = $(this);

	"use strict";
	//Создаем бг
	const sideMenuBg = document.createElement(`div`);

	document.getElementsByTagName(`body`)[0]
			.appendChild(
					sideMenuBg
			);
	sideMenuBg.setAttribute(`id`, `side-menu-bg`);
	sideMenuBg.className = `side-menu-bg hide`;

	//При клике на бг - он исчезает
	sideMenuBg.addEventListener(`click`, () => {
		"use strict";
		sideMenuBg.className += ` hide`;
		logicHideMenu();
	});

	self[0].addEventListener(`click`, () => {
		"use strict";
		sideMenuBg.className = `side-menu-bg`;
		logicShowMenu();
	});

	return self;

};