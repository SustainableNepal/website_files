// Main gruntfile for task runner
//Autor: Sahaj Bajracharya

module.exports = function(grunt) {

    // All configuration goes here 
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        concat: {
            js: {
                src: [
                    'js/lib/wow.js',
                    'js/lib/jquery.simple-text-rotator.js',
                    'js/lib/jQuery.scrollPoint.js',
                    'js/lib/bootstrap.js',
                    'js/lib/respond.js',
                    'js/sustainable-nepal.js'
                ],
                dest: 'js/build/production.js'
            },
              css: {
                src: [
                    'css/lib/animate.css',
                    'css/lib/simpletextrotator.css',
                    'css/lib/bootstrap.css', 
                    'css/sustainable-nepal.css', 
                    'css/project-style.css'
                ],
                dest: 'css/build/production.css'
            }
        },

        uglify: {
            build: {
                src: 'js/build/production.js',
                dest: 'js/build/production.min.js'
            }
        },

        cssmin: {
            css:{
                src: 'css/build/production.css',
                dest: 'css/build/production.min.css'
            }
        },

        watch: {
            js: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify']
            },

            css: {
              files: ['css/*.css'],
              tasks: ['concat', 'cssmin']
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

