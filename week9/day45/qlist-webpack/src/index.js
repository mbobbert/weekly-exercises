window.$ = require('jquery');
require('./index.css');
const qlist = require('./qlist/qlist.js')

var list = new qlist.QList(
	[
		'Some item',
		'Another Item',
		'Item 3'
	]
);

list.mount($('#app'));

