/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      
      less_test: {
	    options: {
	        // Start a live reload server on the default port 35729
	        livereload: true,
	    },
	    files: ['src/**/*.html', 'src/**/*.php'],
    }
   }
  });
  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-watch');
  

  // Default task.
  grunt.registerTask('default', ['watch']);

};
