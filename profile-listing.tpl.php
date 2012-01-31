<?php
// $Id: profile-listing.tpl.php,v 1.2 2007/08/07 08:39:35 goba Exp $

/**
 * @file profile-listing.tpl.php
 * OSU Squares theme implementation for displaying a user and their profile data
 * for member listing pages.
 *
 * @see profile-wrapper.tpl.php
 *      where all the data is collected and printed out.
 *
 * Available variables:
 * - $picture: Image configured for the account linking to the users page.
 * - $name: User's account name linking to the users page.
 * - $profile: Keyed array of all profile fields that are set as visible
 *   in member list pages (configured by site administrators). It also needs
 *   to have a value in order to be present.
 *
 * Each $field in $profile contains:
 * - $field->title: Title of the profile field.
 * - $field->value: Value of the profile field.
 * - $field->type: Type of the profile field, i.e., checkbox, textfield,
 *   textarea, selection, list, url or date.
 *
 * Since $profile is keyed, a direct print of the field is possible. Not
 * all accounts may have a value for a profile so do a check first. If a field
 * of "last_name" was set for the site, the following can be used.
 *
 *  <?php if (isset($profile['last_name'])): ?>
 *    <div class="field last-name">
 *      <?php print $profile['last_name']->title; ?><br />
 *      <?php print $profile['last_name']->value; ?>
 *    </div>
 *  <?php endif; ?>
 *
 * @see template_preprocess_profile_listing()
 */
?>
<div class="profile">
	<?php print $picture; ?>

	<div id="staffnames">
		<?php print $profile['profile_name']->value."<br />".$name; ?>
	</div>

	<div id="titleoffice">
		<?php print $profile['profile_title']->value; ?><br />
		<?php print $profile['profile_office']->value; ?>
	</div>

	<div id="contacts">
		<?php print '<a href="mailto:'.$profile['profile_email']->value.'">'.$profile['profile_email']->value.'</a>';	?><br />
		<?php print $profile['profile_phone']->value; ?>
	</div>

</div>
