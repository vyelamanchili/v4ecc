#
#<?php die('Forbidden.'); ?>
#Date: 2016-08-10 18:49:37 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2016-08-10T18:49:37+00:00	INFO 164.82.32.13	update	Update started by user Super User (10). Old version is 3.4.8.
2016-08-10T18:49:38+00:00	INFO 164.82.32.13	update	Downloading update file from https://github.com/joomla/joomla-cms/releases/download/3.6.0/Joomla_3.6.0-Stable-Update_Package.zip.
2016-08-10T18:49:38+00:00	INFO 164.82.32.13	update	File Joomla_3.6.0-Stable-Update_Package.zip successfully downloaded.
2016-08-10T18:49:38+00:00	INFO 164.82.32.13	update	Starting installation of new version.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Finalising installation.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-07-01. Query text: ALTER TABLE `#__session` MODIFY `session_id` varchar(191) NOT NULL DEFAULT '';.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-07-01. Query text: ALTER TABLE `#__user_keys` MODIFY `series` varchar(191) NOT NULL;.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-10-13. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-10-26. Query text: ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_tag`;.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-10-26. Query text: ALTER TABLE `#__contentitem_tag_map` DROP INDEX `idx_type`;.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-10-30. Query text: UPDATE `#__menu` SET `title` = 'com_contact_contacts' WHERE `client_id` = 1 AND .
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-11-04. Query text: DELETE FROM `#__menu` WHERE `title` = 'com_messages_read' AND `client_id` = 1;.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-11-04. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-11-05. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2015-11-05. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-02-26. Query text: CREATE TABLE IF NOT EXISTS `#__utf8_conversion` (   `converted` tinyint(4) NOT N.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-02-26. Query text: INSERT INTO `#__utf8_conversion` (`converted`) VALUES (0);.
2016-08-10T18:49:42+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` DROP INDEX `idx_link_old`;.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `old_url` VARCHAR(2048) NOT NULL;.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` MODIFY `referer` VARCHAR(2048) NOT NULL;.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.0-2016-03-01. Query text: ALTER TABLE `#__redirect_links` ADD INDEX `idx_old_url` (`old_url`(100));.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.1-2016-03-25. Query text: ALTER TABLE `#__user_keys` MODIFY `user_id` varchar(150) NOT NULL;.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.5.1-2016-03-29. Query text: UPDATE `#__utf8_conversion` SET `converted` = 0  WHERE (SELECT COUNT(*) FROM `#_.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `name` = 'Joomla! Core' WHERE `name` = 'Joomla Core.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `name` = 'Joomla! Extension Directory' WHERE `name`.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/list.x.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/jed/list.xm.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/language/tr.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-01. Query text: UPDATE `#__update_sites` SET `location` = 'https://update.joomla.org/core/extens.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-06. Query text: ALTER TABLE `#__redirect_links` MODIFY `new_url` VARCHAR(2048);.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-08. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-08. Query text: UPDATE `#__update_sites_extensions` SET `extension_id` = 802 WHERE `update_site_.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-04-09. Query text: ALTER TABLE `#__menu_types` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `id`;.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-05-06. Query text: DELETE FROM `#__extensions` WHERE `type` = 'library' AND `element` = 'simplepie'.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-05-06. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-06-01. Query text: UPDATE `#__extensions` SET `protected` = 1, `enabled` = 1  WHERE `name` = 'com_a.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Ran query from file 3.6.0-2016-06-05. Query text: ALTER TABLE `#__languages` ADD COLUMN `asset_id` INT(11) NOT NULL AFTER `lang_id.
2016-08-10T18:49:43+00:00	INFO 164.82.32.13	update	Deleting removed files and folders.
2016-08-10T18:49:49+00:00	INFO 164.82.32.13	update	Cleaning up after installation.
2016-08-10T18:49:49+00:00	INFO 164.82.32.13	update	Update to version 3.6.0 is complete.
2016-08-10T18:53:23+00:00	INFO 164.82.32.13	update	Update started by user Super User (10). Old version is 3.6.0.
2016-08-10T18:53:23+00:00	INFO 164.82.32.13	update	Downloading update file from https://github.com/joomla/joomla-cms/releases/download/3.6.2/Joomla_3.6.2-Stable-Update_Package.zip.
2016-08-10T18:53:23+00:00	INFO 164.82.32.13	update	File Joomla_3.6.2-Stable-Update_Package.zip successfully downloaded.
2016-08-10T18:53:23+00:00	INFO 164.82.32.13	update	Starting installation of new version.
2017-01-18T03:12:11+00:00	INFO 173.67.201.64	update	Update started by user Super User (10). Old version is 3.6.2.
2017-01-18T03:12:11+00:00	INFO 173.67.201.64	update	Downloading update file from https://downloads.joomla.org/cms/joomla3/3-6-5/Joomla_3.6.5-Stable-Update_Package.zip.
2017-01-18T03:12:16+00:00	INFO 173.67.201.64	update	File Joomla_3.6.5-Stable-Update_Package.zip successfully downloaded.
2017-01-18T03:12:16+00:00	INFO 173.67.201.64	update	Starting installation of new version.
2017-01-18T03:12:20+00:00	INFO 173.67.201.64	update	Finalising installation.
2017-01-18T03:12:21+00:00	INFO 173.67.201.64	update	Ran query from file 3.6.3-2016-08-15. Query text: ALTER TABLE `#__newsfeeds` MODIFY `link` VARCHAR(2048) NOT NULL;.
2017-01-18T03:12:21+00:00	INFO 173.67.201.64	update	Ran query from file 3.6.3-2016-08-16. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2017-01-18T03:12:21+00:00	INFO 173.67.201.64	update	Deleting removed files and folders.
2017-01-18T03:12:22+00:00	INFO 173.67.201.64	update	Cleaning up after installation.
2017-01-18T03:12:22+00:00	INFO 173.67.201.64	update	Update to version 3.6.5 is complete.
2017-09-23T04:39:02+00:00	INFO 108.44.159.11	update	Update started by user Super User (10). Old version is 3.6.5.
2017-09-23T04:39:04+00:00	INFO 108.44.159.11	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.8.0-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20170923%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20170923T043930Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=d0a3af0f6826e84a398b7dda2eabfd2a1cd8491cf933fea857e744c2dc2af69e.
2017-09-23T04:39:08+00:00	INFO 108.44.159.11	update	File Joomla_3.8.0-Stable-Update_Package.zip successfully downloaded.
2017-09-23T04:39:08+00:00	INFO 108.44.159.11	update	Starting installation of new version.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Finalising installation.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-06. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-22. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields` (   `id` int(10) unsigned NOT NULL AUTO_I.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_categories` (   `field_id` int(11) NOT NUL.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_groups` (   `id` int(10) unsigned NOT NULL.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_values` (   `field_id` int(10) unsigned NO.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-09-29. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-10-01. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-10-02. Query text: ALTER TABLE `#__session` MODIFY `client_id` tinyint(3) unsigned DEFAULT NULL;.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-04. Query text: ALTER TABLE `#__extensions` CHANGE `enabled` `enabled` TINYINT(3) NOT NULL DEFAU.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-19. Query text: ALTER TABLE `#__menu_types` ADD COLUMN `client_id` int(11) NOT NULL DEFAULT 0;.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-19. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `menutype` = 'main' OR `menutype` = '.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-21. Query text: ALTER TABLE `#__languages` DROP INDEX `idx_image`;.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-24. Query text: ALTER TABLE `#__extensions` ADD COLUMN `package_id` int(11) NOT NULL DEFAULT 0 C.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-24. Query text: UPDATE `#__extensions` AS `e1` INNER JOIN (SELECT `extension_id` FROM `#__extens.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2016-11-27. Query text: ALTER TABLE `#__modules` MODIFY `content` text NOT NULL DEFAULT '';.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_alias` varchar(400) CHARACTER SET utf8.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext NOT NULL DEFAULT '';.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` varchar(255) NOT NUL.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text NOT NULL DEFAULT '';.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadata` varchar(2048) NOT NULL DEFAU.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_language` char(7) NOT NULL DEFAULT '';.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NOT NULL DEFAULT .
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NOT NULL DEFAUL.
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_content_item_id` int(10) unsigned NOT .
2017-09-23T04:39:12+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_xreference` varchar(50) NOT NULL DEFAU.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_type_id` int(10) unsigned NOT NULL DEF.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `title` varchar(255) NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `params` text NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadesc` varchar(1024) NOT NULL DEFAULT '' .
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '' C.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadata` varchar(2048) NOT NULL DEFAULT '' .
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `language` char(7) NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-15. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `client_i.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"menutype":"main"','"men.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu_types`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `cl.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `client_id` = 1  WHERE `menutype` = 'main';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main'  WHERE `client_id` = 1     AND `menu.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main',        `client_id` = 1  WHERE `menu.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-17. Query text: DELETE FROM `#__menu_types`  WHERE `client_id` = 1    AND `menutype` IN ('main',.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-01-31. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-02. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-15. Query text: ALTER TABLE `#__redirect_links` MODIFY `comment` varchar(255) NOT NULL DEFAULT '.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `name` varchar(255) NOT NULL;.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `alias` varchar(400) CHARACTER SET utf8m.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname1` varchar(255) NOT NULL DEFAUL.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname2` varchar(255) NOT NULL DEFAUL.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname3` varchar(255) NOT NULL DEFAUL.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `language` varchar(7) NOT NULL;.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `xreference` varchar(50) NOT NULL DEFAUL.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__languages` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 0.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__menu_types` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT .
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__content` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__newsfeeds` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` SET `published` = 1 WHERE `alias` = 'root';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.publis.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `alias` = 'root';.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.published) >.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-03-19. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-04-10. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.0-2017-04-19. Query text: UPDATE `#__extensions` SET `params` = '{"multiple":"0","first":"1","last":"100",.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.3-2017-06-03. Query text: ALTER TABLE `#__menu` MODIFY `checked_out_time` datetime NOT NULL DEFAULT '0000-.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.7.4-2017-07-05. Query text: DELETE FROM `#__postinstall_messages` WHERE `title_key` = 'COM_CPANEL_MSG_PHPVER.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.8.0-2017-07-28. Query text: ALTER TABLE `#__fields_groups` ADD COLUMN `params` TEXT  NOT NULL  AFTER `orderi.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Ran query from file 3.8.0-2017-07-31. Query text: INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem.
2017-09-23T04:39:13+00:00	INFO 108.44.159.11	update	Deleting removed files and folders.
2017-09-23T04:39:14+00:00	INFO 108.44.159.11	update	Cleaning up after installation.
2017-09-23T04:39:14+00:00	INFO 108.44.159.11	update	Update to version 3.8.0 is complete.
2017-11-12T21:05:25+00:00	INFO 108.44.159.11	update	Update started by user Super User (10). Old version is 3.8.0.
2017-11-12T21:05:27+00:00	INFO 108.44.159.11	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.8.2-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20171112%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20171112T210551Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=3f2c12efb81b93f15f684a23353773a053e5bb09560aa7b2df46424d4ef7e20b.
2017-11-12T21:05:30+00:00	INFO 108.44.159.11	update	File Joomla_3.8.2-Stable-Update_Package.zip downloaded.
2017-11-12T21:05:30+00:00	INFO 108.44.159.11	update	Starting installation of new version.
2017-11-12T21:05:33+00:00	INFO 108.44.159.11	update	Finalising installation.
2017-11-12T21:05:33+00:00	INFO 108.44.159.11	update	Ran query from file 3.8.2-2017-10-14. Query text: ALTER TABLE `#__content` ADD INDEX `idx_alias` (`alias`(191));.
2017-11-12T21:05:33+00:00	INFO 108.44.159.11	update	Deleting removed files and folders.
2017-11-12T21:05:34+00:00	INFO 108.44.159.11	update	Cleaning up after installation.
2017-11-12T21:05:34+00:00	INFO 108.44.159.11	update	Update to version 3.8.2 is complete.
