* ALTER TABLE `photo_galleries` ADD `story` TEXT NULL DEFAULT NULL AFTER `photo_caption`;
* ALTER TABLE `campaigns` ADD `start_date` DATETIME NULL DEFAULT NULL COMMENT 'Campaign start date' AFTER `campaign_status`;

------------------- Updated on DEV --------------------