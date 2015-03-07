// Main gruntfile for task runner
//Autor: Sahaj Bajracharya

module.exports = function(grunt) {

    // All configuration goes here 
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'js/lib/wow.js',
                    'js/lib/jquery.simple-text-rotator.js',
                    'js/lib/jQuery.scrollPoint.js',
                    'js/lib/bootstrap.js',
                    'js/sustainable-nepal.js'
                ],
                dest: 'js/build/production.js',
            }
        },

        uglify: {
            build: {
                src: 'js/build/production.js',
                dest: 'js/build/production.min.js'
            }
        },

        cssmin: {
            combine: {
                files: {
                    'css/build/production.css': ['css/lib/animate.css','css/lib/simpletextrotator.css','css/lib/bootstrap.css', 'css/sustainable-nepal.css']
                }
            },

            minify: {
                expand: true,
                cwd: 'css/build/',
                src: ['*.css'],
                dest: 'css/build/',
                ext: '.min.css'
            }
        },

        watch: {
            scripts: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            } 
        }

    });

    // Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-notify');

    // Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'cssmin']);

};

