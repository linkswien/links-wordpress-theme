# LINKS Wien Wordpress Theme

## Plugins

This theme is tested to work with the following plugins:

- Events: [Events Manager](https://de.wordpress.org/plugins/events-manager/)
- Slider: [Smart Slider 3](https://wordpress.org/plugins/smart-slider-3/)

## Local Development

You need a local wordpress installation (e.g. [VVV](https://varyingvagrantvagrants.org/)) and [Sass](https://sass-lang.com/).

Checkout this repository into the `wp-content/themes` folder of the Wordpress installation. Run `sass scss/style.scss style.css` to create the style.css for the theme and you are ready to go.

## Import content from links-wien.at 

Login to your wordpress database (f.e. with phpmyadmin, default credentials are: wp:wp)

Go to the database of your wordpress installation (f.e. wordpress-one), select all tables and drop them

Import the database dump (.sql file) provided to you from a LINKS administrator

Run the following SQL statements:
`UPDATE wp_options SET option_value = replace(option_value, 'https://links-wien.at', 'http://one.wordpress.test') WHERE option_name = 'home' OR option_name = 'siteurl';`
`UPDATE wp_posts SET guid = replace(guid, 'https://links-wien.at','http://one.wordpress.test');`
`UPDATE wp_posts SET post_content = replace(post_content, 'https://links-wien.at', 'http://one.wordpress.test');`
`UPDATE wp_postmeta SET meta_value = replace(meta_value,'https://links-wien.at','http://one.wordpress.test');`
Of course `http://one.wordpress.test/` is an example and should match the url of your wordpress installation

Create an admin user for yourself:
Add a row to your `wp_users` database-table:
  * user_login: desired username
  * user_pass: select function MD5 and type in your desired password 
  * Type in user_nicename, user_email and display_name as you like
  * Set user_status to 0

Look at the table to find out the ID for the user that was just generated.

Add a row to the `wp_usermeta` table:
  * user_id: use the id of the user you just created
  * meta_key: set this to `wp_capabilities`
  * meta_value: set this to `a:1:{s:13:"administrator";s:1:"1";}`

Now you can log in to `http://one.wordpress.test/wp-admin`!

Go to Appearance -> Themes and activate the Links Wien Theme

If you go to `http://one.wordpress.test` you should see the links site!

What is still missing are the pictures. Copy the content of the uploads-Folder with the pictures (provided to you by a LINKS administrator) to `wp-admin/uploads` of your wordpress installation.

Now you should have a local in

## Continuous Integration

Pushing to `develop` automatically deploys the theme to [wienwp.fnordserver.dev](https://wienwp.fnordserver.dev/)
Pushing to `main` automatically deploys the theme to [links-wien.at](https://links-wien.at/)