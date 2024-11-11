module.exports = {
	globDirectory: './',
	globPatterns: [
		'**/*.{php,ttf,eot,svg,woff,woff2,jpg,png,JPG,jfif,ico,jpeg,js,json,css}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};