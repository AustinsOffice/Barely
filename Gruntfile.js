module.exports = function(grunt){
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            build: {
                files: {
                    'style.css': '_sass/main.scss'
                }
            }
        },
        watch: {
            css: {
                files: ['_sass/**/*.scss'],
                tasks: ['css']
            }
        },
        
        autoprefixer: {
            // prefix the specified file
            single_file: {
              src: 'style.css',
              dest: 'style.css'
            },

            // prefix all files
            multiple_files: {
              expand: true,
              flatten: true,
              src: 'css/*.css',
              dest: 'css/'
            },
          }
    });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    
    grunt.registerTask('css', ['sass', 'autoprefixer']);
    grunt.registerTask('default', []);

};