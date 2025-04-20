app_name=$(notdir $(CURDIR))
build_directory=$(CURDIR)/build/artifacts
package_name=$(build_directory)/$(app_name)
composer=$(shell which composer 2> /dev/null)

all: appstore 

write:
	sudo chown -R www-data:$$(whoami) ../$(app_name) ; sudo chmod -R 775 ../$(app_name)

# Builds the source package for the app store, ignores php and js tests
.PHONY: appstore
appstore:
	rm -rf $(build_directory)
	mkdir -p $(build_directory)
	tar cvzf $(package_name).tar.gz \
	--exclude-vcs \
	--exclude="../$(app_name)/build" \
	--exclude="../$(app_name)/tests" \
	--exclude="../$(app_name)/Makefile" \
	--exclude="../$(app_name)/*.log" \
	--exclude="../$(app_name)/phpunit*xml" \
	--exclude="../$(app_name)/composer.*" \
	--exclude="../$(app_name)/js/node_modules" \
	--exclude="../$(app_name)/node_modules" \
	--exclude="../$(app_name)/webpack.js" \
	--exclude="../$(app_name)/package-lock.json" \
	--exclude="../$(app_name)/README.*" \
	--exclude="../$(app_name)/js/tests" \
	--exclude="../$(app_name)/js/test" \
	--exclude="../$(app_name)/js/*.log" \
	--exclude="../$(app_name)/js/package.json" \
	--exclude="../$(app_name)/js/bower.json" \
	--exclude="../$(app_name)/js/karma.*" \
	--exclude="../$(app_name)/js/protractor.*" \
	--exclude="../$(app_name)/package.json" \
	--exclude="../$(app_name)/bower.json" \
	--exclude="../$(app_name)/translationtool.phar" \
	--exclude="../$(app_name)/karma.*" \
	--exclude="../$(app_name)/protractor\.*" \
	--exclude="../$(app_name)/.*" \
	--exclude="../$(app_name)/src" \
	--exclude="../$(app_name)/js/.*" \
	--exclude="../$(app_name)/vendor" \
	--exclude="../$(app_name)/drivers" \
	--exclude="../$(app_name)/*.sh" \
	../$(app_name)
