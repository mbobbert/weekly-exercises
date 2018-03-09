const path = require('path');

module.exports = {
    mode: 'production',
    entry: './index.js',
    output: {
      path: __dirname,
      filename: 'index.min.js'
    }
  }
