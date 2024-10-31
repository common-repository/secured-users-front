=== Secured Users Front ===
Contributors: plocha
Tags: secure, ssl, frontend, backend, user, login, session
Requires at least: 3.5.2
Tested up to: 3.5.2
Stable tag: 1
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Secures the backend AND the frontend with ssl when you are logged in

== Description ==

Secures the backend AND the frontend with ssl when you are logged in. If a user logs in and calls a http site you will be redirected to the equivalent https site. You do not have to manually define `FORCE_SSL_ADMIN` in the `wp-config.php`. The authentication cookies will be ssl secured.

= Warning =
There is no protection against ssl leaks. If you follow a http link, a [men in the middle](https://en.wikipedia.org/wiki/Man-in-the-middle_attack) could, for example, see which site you enter. 

But he cannot steal your login session! :D

== Changelog ==

= 1 =
* first commit

== Upgrade Notice ==

= 1 =
first version
