=== Custom Menu Driven Prev/Next Links ===
Contributors: Susheel Kumar, CodingBee
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3MX23YDX9XU3Y
Tags: prev/next, prev-next, previus & next links, custom menu
License: GPLv2 or later
Requires at least: 4.0.0
Tested up to: 4.0.1
Stable tag: 0.1

This plugin lets you display prev/next links at the bottom of your posts, and they are dictated by a custom menu.   

== Description ==

If you have a collection of posts that you want your readers to view in a particular sequence then this plugin can help. 

Let's take a look at an example, if you check out the screenshots section, you'll find a screenshot taken from the w3school's website, in particular a it is a post about "PHP constants", you'll notice that there is a menu called "PHP Tutorials" on the left hand side and that the post we are viewing is about "constants" which appears about halfway down this menu. According this menu, the 2 posts on either side, are about "PHP Strings" and "PHP Operators". You can access these adjacent posts by clicking the menu links. Alternatively if you scroll down this post, you will find "Previous" and "Next" links that you can use instead. This makes it easier for your readers to jump to the previous/next post once they have reached the bottom without needing to scroll back up to the menu again. 

This plugin lets you replicate this feature by generating the prev/next links which appears at the bottom of each post.


= Usage Instructions =

At the moment, this plugin is very basic and doesn't introduce any additional options/settings on the backend, so don't bother looking for them! After you have installed this plugin, do the following:

1. Group your posts by placing them into the same category.
2. Then go to Appearance -> Menus
3. Create a new custom menu. This custom menu's name must match the category's name. 
4. Now add your group of posts to the menu and order them to your liking. Note, if you can't find the option to add posts to the custom menu, then try going to "screen options", which is at the top right, and then enable the "posts" checkbox. 
5. Now go to Appearance -> Widget
6. Add your newly created custom menu to your Sidebar. 
7. Optional step: One thing you may want to do is only display this custom menu on certain posts only, i.e. only display this menu on posts that belongs to a certain category. You can achieve this by using the very hand [Display Widgets](https://wordpress.org/plugins/display-widgets "Display Widgets") plugin.
8. Now comes the tricky part, go to Appearance -> Editor. Here you need to insert "<?php CMD_prev_next();?>" into one of the php files (which are listed on the far right). Exactly which file you need to edit depends on the particular Wordpress theme that you're using.  A good starting point could be going to a file called "single.php".       

Once you are done, go to one of the posts that are in the custom menu and see whether you can view see the custom menu along with the previous/next links. 


= New Features =
If you would like a new feature to be added, then please let us know via the support forum. 





== Installation ==

You can download and install this plugin using the built in WordPress plugin installer, just search for the plugin's name. If you download this plugin manually, make sure it is uploaded to "/wp-content/plugins/".

Activate this plugin in the "Plugins" admin panel using the "Activate" link. 



== Frequently Asked Questions ==

= Who is this plugin for =

If you have a series of posts that you want your audience to view in a certain order, then Wordpress already allows you to order yours posts in the form of a custom menu. This plugin however takes things one step further, by inserting previous/next links at the bottom of each of your posts.   
  

== Screenshots ==

1. This plugin introduces prev/next links which complements the custom menu, and makes it easier for your readers to go to the previous/next without the need to scroll back up to the menu again.   
  
  
== Changelog ==


= 0.1 =
* 07/12/14
* Initial release.

== Upgrade Notice ==

= 0.1 =
This is an initial release.
