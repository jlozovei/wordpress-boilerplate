'use strict'

const config = {
  dev: {
    base: './dev',
    css: './dev/css',
    js: './dev/js'
  },

  dist: {
    base: './dist',
    css: {
      wordpress: './',
      static: './dist/css'
    },
    js: './dist/js'
  },

  connect: {
    host: 'localhost',
    port: '9567',
    name: 'Your Webite Name'
  }
}

module.exports = config;
