module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    less: {
      development: {
        options: {
          paths: ["css"]
        },
        files: {
          "css/bootstrap_material.css": "less/bootstrap_material.less"
        }
      }
    },
    cssmin: {
      files: {
        expand: true,
        cwd: 'css',
        src: ['*.css', '!*.min.css'],
        dest: 'css',
        ext: '.min.css'
      }
    },
    concat: {
      dist: {
        src: ['bower_components/bootstrap-material-design/dist/js/ripples.min.js', 'bower_components/bootstrap-material-design/dist/js/material.min.js'],
        dest: 'js/bootstrap_material.js'
      }
    },
    watch: {
      grunt: {
        options: {
          reload: true
        },
        files: ['Gruntfile.js']
      },
      css: {
        files: 'less/**/*.less',
        tasks: ['less', 'cssmin']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  
  grunt.registerTask('build', ['less', 'concat', 'cssmin']);
  grunt.registerTask('default', ['less', 'cssmin', 'watch']);
}
