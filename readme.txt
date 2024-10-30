=== Hide or Show Comments ===
Contributors: zelopes
Tags: comments
Requires at least: 
Tested up to: 2.7
Stable tag: trunk

This plugin hides the comments by default and shows them on demand.

== Description ==

In order to focus your site visitors attention on the post itself, the
comments, both the comment form and the list of comments, can be hidden and
only shown on request.

This plugin provides an easy way to do this.

The comments block is hidden by default, having in its place
the clickable sentence like 'Click here to see the comments (1) or add a new comments'.
This sentence is replaced on click by the comments block.

You can find the description and instructions:

- in <a href="http://www.bombolom.com/weblog_en/wordpress/PluginHideShowComments2-2007-10-23-01-35.html">English</a>
- in <a href="http://www.bombolom.com/weblog_pt/wordpress/PluginHideShowComments2-2007-10-23-01-35.html">Portuguese</a>

To see this Plugin in action you can see the <a href="http://www.paleografia.org/site/?p=22#more-22">paleografia.org</a>
web site, at the bottom of the post.

Note that this site is in Portuguese but you can see how the Plugin works with the
'Clique aqui para ver os comentários (0) ou adiccionar um novo comentário' sentence at the bottom.

This is the second version of this plugin, following some suggestions to the version 1.0

The new features are:

- New link to hide back the comments block.
- The link to show the comments has the total of comments.

In order to have a coherent layout I would suggest to not include the total of comments
on the single.php file.


== Installation ==

1. Decompress the files to the /wp-content/plugins/ directory.
2. Confirm that the plugin content is on the directory hide-or-show-comments.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Replace in your single.php the expression &lt;?php comments_template(); ?&gt; 
by &lt;?php hideshowComments(); ?&gt;.


== Internationalization ==

You may find the POT file available with this distribution to create your own language version.

Besides English, this distribution provides the language versions:

- Portuguese (Portugal)
- French (France)

It only has one sentence to translate but I believe that is nicer
to have it available.

Send me any new language version that you may create so I may make it available to others.

== Credits ==

Copyright 2007 Jose Lopes

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
