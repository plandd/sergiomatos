var path = '/var/www/wordpress';module.exports = function( grunt ) {  grunt.initConfig({  	pkg: grunt.file.readJSON('package.json'),  	uglify: {  		options: {   			// the banner is inserted at the top of the output    		banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'  		},  		dist: {    		files: {      			'scripts.js': [              'bower_components/foundation/js/foundation/foundation.js',              //'bower_components/foundation/js/foundation/foundation.dropdown.js',              //'bower_components/foundation/js/foundation/foundation.abide.js',              //'bower_components/foundation/js/foundation/foundation.alert.js',              //'bower_components/foundation/js/foundation/foundation.tooltip.js',              //'bower_components/foundation/js/foundation/foundation.reveal.js',              //'bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js',              //'bower_components/jquery-countTo/jquery.countTo.js',              //'bower_components/lightbox2/dist/js/lightbox.js',              'bower_components/OwlCarousel/owl-carousel/owl.carousel.js',              //'bower_components/jQuery-Mask-Plugin/dist/jquery.mask.js',              'js/*.js'            ],    		}  		}	  },    sprite:{      'all': {        src: 'sprites/*.png',        destImg: 'images/spritesheet.png',        destCSS: 'sprites.css',        algorithm: 'binary-tree'      }    },    cssmin: {      add_banner: {        options: {          banner: '/*\nTheme Name: <%= pkg.title %>\nTheme URI: <%= pkg.homepage %>\nDescription: <%= pkg.description %>\nVersion: <%= pkg.version %>\nAuthor: <%= pkg.author %>\nTags: <%= pkg.tags %>\nText Domain: <%= pkg.name %>\n*/'        },        files: {          'style.css': [            'stylesheets/*.css',            'sprites.css',            'bower_components/perfect-scrollbar/css/perfect-scrollbar.css',            'bower_components/lightbox2/dist/css/lightbox.css',            'bower_components/OwlCarousel/owl-carousel/owl.carousel.css',            'bower_components/OwlCarousel/owl-carousel/owl.theme.css'          ]        }      }    },    uncss: {      dist: {        files: {          'stylesheets/app.css': ['index.html']        }      }    },    imagemin: {      dist: {          options: {              optimizationLevel: 7,              progressive: false          },          files: [{              //expand: true,              cwd: 'images/',              src: 'images/*',              dest: 'images/'          }]      }    },    'ftp-deploy': {        build: {          auth: {          host: 'foccus.cc',          port: 21,          authKey: 'key1'        },          src: path,          dest: '/wp-content/themes/radarsertanejo',          exclusions: [            path+'/node_modules/*',            path+'/node_modules',            path+'/bower_components/*',            path+'/bower_components',            path+'/sprites/*',            path+'/sprites',            path+'/scss/*',            path+'/scss',            path+'/js',            path+'/js/*',            path+'/stylesheets/*',            path+'/stylesheets',            path+'/media/*',            path+'/media',            path+'/.sass-cache/*',            path+'/.sass-cache',            path+'/Gruntfile.js',            path+'/bower.json',            path+'/README.md',            path+'/.gitignore',            path+'/.ftppass',            path+'/.bowerrc',            path+'/.DS_Store',            path+'/package.json',            path+'/.git/*',            path+'/.git',            path+'/config.rb',            path+'/fonts/*',            path+'/images/*',            path+'/img',            path+'/functions',            //path+'/includes',            path+'/temp',            path+'/admin',            //path+'/page-templates',            path+'/screenshot.png',            path+'/sprites.css',            path+'/robots.txt',            path+'/favicon.ico',            path+'/humans.txt',            path+'/Gemfile',            path+'/Gemfile.lock',            path+'/fonts/.DS_Store',            path+'/*.php-tmp'          ]        }},      	watch : {            dist : {              files : [                'js/*','js/components/*.js','stylesheets/*','images/*','*.php','*.html','sprites/*'              ],              tasks : [ 'uglify','sprite','cssmin','imagemin' ],              options: {                livereload: true              }            },        }  });  grunt.loadNpmTasks('csswring');  grunt.loadNpmTasks('grunt-ftp-deploy');  //grunt.loadNpmTasks('grunt-contrib-jshint');  //grunt.loadNpmTasks('jshint-stylish');  grunt.loadNpmTasks('grunt-contrib-uglify');  grunt.loadNpmTasks('grunt-contrib-cssmin');  grunt.loadNpmTasks('grunt-spritesmith');  grunt.loadNpmTasks('grunt-contrib-watch');  //grunt.loadNpmTasks("grunt-rsync");  grunt.loadNpmTasks('grunt-contrib-imagemin');  grunt.loadNpmTasks('grunt-uncss');  //grunt.loadNpmTasks('grunt-contrib-connect');  //grunt.loadNpmTasks('grunt-uncss');  grunt.registerTask( 'default', ['watch'] );  grunt.registerTask( 'w', [ 'watch' ] );};