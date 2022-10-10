=== Poe ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.0
Requires PHP: 5.6
Tested up to: 6.0
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Make sure you're running WordPress 6.0 or later.
2. Upload the theme.
3. Activate the theme.


== Licenses ==

Poe is derived from the Davis Blocks theme, Copyright (c) 2022 Anders Norén.
Davis Blocks is distributed under the terms of the GNU GPL version 2.0.

Poe bundles the following third-party resources:

Inter font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/Inter/

All illustrations and icons in the theme files and screenshot.png by Anders Norén
License: Creative Commons Zero, https://creativecommons.org/publicdomain/zero/1.0/


== Changelog ==

Version 0.3 (2022-10-10)
-------------------------
- Replaced the home.html template with front-page.html, since the blog archive is unusable when home.html is included in the theme. This could cause issues if you don't have a page set as "Homepage" on Settings → Reading.

Version 0.2.6 (2022-10-07)
-------------------------
- Removed index.php, since it's no longer needed to pass the WordPress.org automatic theme review.

Version 0.2.5 (2022-09-27)
-------------------------
- Updated <!-- wp:template-part --/> to omit the "theme":"poe" code, fixing issues when modifying template parts in child themes (thanks, @janboddez).

Version 0.2.4 (2022-09-09)
-------------------------
- Another stab at the blockGap issue, now by removing spaces around the values inside var() which seem to trip up Gutenberg.

Version 0.2.3 (2022-09-09)
-------------------------
- Fixed a blockGap issue causing missing gutters in columns when running the Gutenberg plugin.

Version 0.2.2 (2022-07-28)
-------------------------
- Moved the contents of header.html and footer.html to their respective patterns, and included those patterns with <!-- wp:pattern /--> in the template parts.
- Added a maximum width to inputs, preventing overflow of inputs without plugin styles.

Version 0.2.1 (2022-07-15)
-------------------------
- Updated the demo content pattern to remove the second section with post previews, preventing duplicated content on home.html by default.
- Added placeholder links to all menus, and removed reference to menu ID (ref attribute).

Version 0.2 (2022-07-14)
-------------------------
- Moved all of the patterns to the /patterns/ folder, and removed the PHP functions previously used to register patterns.
- Added home.html, which can be used as a starting point for a home page and is displayed as the front page in the Preview on WordPress.org. It outputs the new demo content pattern.
- New patterns:
	- General: Demo content
	- General: Wide heading with link
	- Portfolio: Portfolio cases

Version 0.1.2 (2022-07-13)
-------------------------
- Updated the screenshot to look less like an ad.
- Updated the theme description with accurate number of Global Styles variations.

Version 0.1.1 (2022-07-12)
-------------------------
- Minor fixes in the style.css theme description.
- Fixed the font filename in theme.json having incorrect casing, causing issues on some hosts.
- Fixed default pull quote font size.
- Adjusted post header block gap.

Version 0.1 (2022-07-11)
-------------------------