# WordPress Theme for InceptionCoding.com

The purpose of this project is to create a custom theme for my personal website to present current projects , resumes, software products / solutions for sale, and a blog related to software development topics.



## Development Environment

The tools and environment used to develop this theme are as follows:

- WordPress Install Running on the WAMP Server
- PHP 7.2
- MySQL 5.6
- IDE used is NetBeans 8.2
- GULP Task Manager
  - The task manager is used to update the browser and check CSS code for any errors. The browser is updated anytime there is a change saved in the editor.
- The CSS is not directly written, instead SASS is used, and combine multiple .scss files to compile into the style.css for the site.



## Starter Theme

The theme was built using _S (Underscores) starter theme https://underscores.me/





## To-Do:

- [x] Develop basic theme.
- [x] Add features to WordPress customizer.
- [ ] Redo the site navigation and optimize for mobile devices.
- [ ] Develop a GitHub Plugin.
- [ ] Deploy to live server.




[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)


# _Underscores README

[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
Note: `.no-sidebar` styles are not automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

If you want to keep it simple, head over to https://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`.
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`.
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
