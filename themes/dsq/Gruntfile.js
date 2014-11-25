module.exports = function(grunt) {
	grunt.initConfig({
		watch: {
			options: {
				livereload: true
			},
			css: {
				files: ["style.less"],
				tasks: ["less"]
			},
			php: {
				files: ["*.php"]
			}
		},
		less: {
			development: {
				options: {
					paths: ["assets/css"]
				},
				files: {
					"style.css": "style.less"
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
};
