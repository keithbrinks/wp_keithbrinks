module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /**
     * grunt-sass
     * https://www.npmjs.com/package/grunt-sass
     *
     * Compiles Sass from ./sass/main.scss and saved to ./build/style.css
     */
    sass: {
        buildStylesheet: {
            files: {
                'src/css/style-uncompressed.css': 'sass/base.scss'
            }
        }
    },

    /**
     * grunt-contrib-cssmin
     * https://github.com/gruntjs/grunt-contrib-cssmin
     *
     * Minifies CSS files
     */
    cssmin: {
      minifyStylesheet: {
        files: {
          'dist/style.css': 'src/css/style-uncompressed.css'
        }
      }
    },

    /**
     * grunt-shell
     * https://www.npmjs.com/package/grunt-shell
     *
     * Copies theme from build directory to WordPress. The below makes the
     * assumption that MAMP and WordPress are with the following path
     */
    shell: {
      distributeTheme: {
        command: 'cp -r src/* /Applications/MAMP/htdocs/sites/wp-content/themes/wp_keithbrinks'
      }
    }

  });

  // Automatically load all NPM tasks
  require('load-grunt-tasks')(grunt);

  // Register tasks
  grunt.registerTask('default', ['sass', 'cssmin', 'shell:distributeTheme'])

}
