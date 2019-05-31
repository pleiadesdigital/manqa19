import $ from 'jquery';

class MobileMenu {

  constructor() {
    this.siteHeader = $(".site-header");
    this.menuIcon = $(".site-header__menu-icon");
    this.menuContent = $(".site-header__main-navigation");
    this.subMenus = $(".site-header__main-navigation--submenu");
    this.subMenusLi = $(".site-header__main-navigation--submenu li");
    this.events();
    this.slideSubMenus();
  }

  events() {
    this.menuIcon.click(this.toggleTheMenu.bind(this));
  }

  toggleTheMenu() {
    this.menuContent.toggleClass("site-header__main-navigation--is-visible");
    this.siteHeader.toggleClass("site-header--is-expanded");
    this.menuIcon.toggleClass("site-header__menu-icon--close-x");
    this.subMenus.css("display", "none");
  }

  slideSubMenus() {
    this.subMenusLi.click(function() {
      $(this).siblings().find(subMenus).slideUp();
      $this.find(subMenus).slideToggle();
    });
  }

}


export default MobileMenu;
