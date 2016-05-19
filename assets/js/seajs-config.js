seajs.config({
    base: '/assets',
    // base: '/sae/ccforward/assets',
    charset: 'utf-8',
    paths: {
        'plugin': 'js/plugin',
    },
    alias: {
        jquery: 'js/jquery.min.js',
        headerTab: 'js/module/header-tab.js',
        project: 'js/module/project.js',
        slick: 'js/plugin/slick/slick.js'
    }
});