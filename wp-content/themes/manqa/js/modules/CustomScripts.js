import $ from 'jquery';

// $(".large-hero").css("border", "2px solid slateblue");
// document.querySelector(".large-hero").style.border = "2px solid tomato";

class CustomScripts {

  constructor() {
    this.mainHeader = $(".site-header");
    this.events();
  }

  events() {
    this.mainHeader.on("click", this.doSomething.bind(this));
  }

  doSomething() {
    console.log("Lets see if it works!");
  }



}

export default CustomScripts;
