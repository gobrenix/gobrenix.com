/**
 * Common grunt task for different technologies
 * @author jbiasi <biasijan@gmail.com>
 * @param  {object} grunt   Main grunt
 */
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                        '<%= grunt.template.today("yyyy-mm-dd") %> */',
                mangle: {
                    except: ['jQuery']
                },
                compress: {
                    drop_console: (grunt.option('prod') ? true : false)
                },
                quoteStyle: 1, // always use single quotes
                preserveComments: false,
                sourceMap: true,
                sourceMapName: '<%= pkg.dist %>/app.js.map',
            },
            prod: {
                files: {
                    '<%= pkg.dist %>/app.js': [
                        './assets/js/jquery-*.js',
                        './assets/js/jquery.*.js',
                        './assets/js/**/*.js',
                        './modules/**/*.js'
                    ]
                }
            }
        },
        less: {
            production: {
                options: {
                    paths: [
                        './assets/css',
                        './modules'
                    ],
                    plugins: [
                        new (require('less-plugin-autoprefix'))({browsers: ['last 2 versions']}),
                        new (require('less-plugin-clean-css'))(cleanCssOptions)
                    ]
                },
                files: {
                    '<%= pkg.dist %>/app.css': [
                        './assets/css/**/*.less',
                        './assets/css/**/*.css',
                        './modules/**/*.less'
                    ]
                }
            }
        },
        postcss: {
            options: {
                remove: true,   // remove outdated prefixes
                diff: '<%= pkg.dist %>/app.css.patch',
                map: '<%= pkg.dist %>/app.css.map',
                safe: false,    // PostCSS safe mode
                processors: [
                    require('csswring')
                ]
            },
            afterbuild: {
                src: '<%= pkg.dist %>/app.css'
            }
        },
        watch: {
            options: {
                spawn: false,
                debounceDelay: 1000,    // delay between rerunning
                interval: 200           // interval to check
            },
            css: {
                files: [
                    './assets/css/**/*.css',
                    './assets/css/**/*.less',
                    './modules/**/*.less'
                ],
                tasks: ['front-styles'],
            },
            js: {
                files: [
                    './assets/js/**/*.js',
                    './modules/**/*.js'
                ],
                tasks: ['front-scripts'],
            }
        },
        concurrent: {
            options: {
                logConcurrentOutput: true
            },
            frontend: {
                tasks: [
                    'watch:css',
                    'watch:js'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-concurrent');

    grunt.registerTask('front-styles', 'Task for frontend styles', function() {
        if(!grunt.task.exists('grunt-contrib-less')) {
            grunt.task.loadNpmTasks('grunt-contrib-less');
        }
        grunt.task.run('less:prod');

        if(!grunt.task.exists('grunt-postcss')) {
            grunt.task.loadNpmTasks('grunt-postcss');
        }
        grunt.task.run('postcss:afterbuild');
    });

    grunt.registerTask('front-scripts', 'Task for frontend scripts', function() {
        if(!grunt.task.exists('grunt-contrib-uglify')) {
            grunt.task.loadNpmTasks('grunt-contrib-uglify');
        }
        grunt.task.run('uglify:prod');
    });

    grunt.registerTask('default', [
        'front-styles',
        'front-scripts',
        'concurrent:frontend'
    ]);
};
