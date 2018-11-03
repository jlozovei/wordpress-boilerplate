"use strict";

(() => {
  const app = {
    init() {
      this.bindEvents();
    },

    bindEvents() {
      console.log("everything is fine!");
    }
  };

  app.init();
})();
