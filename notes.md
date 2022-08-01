### Optimize Laravel On Production
> https://www.cloudways.com/blog/laravel-performance-optimization/

//
* Enable opcache - done
* add google analytics - done


# DB CHANGES
* pa migrate --path=/database/migrations/2022_04_06_173312_create_blog_comments_table.php
* ALTER TABLE `photo_galleries` ADD `img_thumbnail` VARCHAR(255) NULL DEFAULT NULL AFTER `img`;
* pa migrate --path=/database/migrations/2022_04_08_141204_create_faqs_table.php
* pa migrate --path=/database/migrations/2022_04_09_101130_create_user_types_table.php
* ALTER TABLE `photo_galleries` ADD `is_photographer_image` TINYINT(3) NOT NULL DEFAULT '0' COMMENT '1 - Yes, 0 - No' AFTER `users_id`;
* pa migrate --path=/database/migrations/2022_04_15_085951_create_moments_table.php
* pa migrate --path=/database/migrations/2022_04_23_065224_add_photo_caption_to_photo_galleries_table.php
* ALTER TABLE `campaigns` ADD `campaign_status` TINYINT(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 - Draft, 2 - Running, 3 - End' AFTER `desc`;
------------------------------ DONE --------------------------------

* ALTER TABLE `campaigns` ADD `started_at` DATETIME NULL DEFAULT NULL AFTER `campaign_status`, ADD `ended_at` DATETIME NULL DEFAULT NULL AFTER `started_at`;
* ALTER TABLE `photo_galleries` ADD `campaign_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL AFTER `users_id`;

* CREATE TABLE `gallery_photo_likes` ( `photo_gallery_id` BIGINT(20) UNSIGNED NOT NULL COMMENT 'Foreign: `photo_galleries - id`' , `user_id` BIGINT(20) UNSIGNED NOT NULL COMMENT 'Foreign: `users - id`' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;

* UPDATE `playlist1_main_vedios` SET `link` = 'https://www.youtube.com/watch?v=_GP1zyZZcCE' WHERE `playlist1_main_vedios`.`id` = 7;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=iOHj6wz30qI' WHERE `playlist1_other_vedios`.`id` = 24;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=XgXsJS4kCvg' WHERE `playlist1_other_vedios`.`id` = 25;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=7FYuG0eu7S8' WHERE `playlist1_other_vedios`.`id` = 26;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=7M4QFB_1Un0' WHERE `playlist1_other_vedios`.`id` = 28;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=f5PvRc10fCI' WHERE `playlist1_other_vedios`.`id` = 29;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=CWCNKJ5SvWE' WHERE `playlist1_other_vedios`.`id` = 30;
* UPDATE `playlist1_other_vedios` SET `link` = 'https://www.youtube.com/watch?v=kMIGi8Sej7g' WHERE `playlist1_other_vedios`.`id` = 31;

* ALTER TABLE `users` ADD `is_vivographer` TINYINT(3) NOT NULL DEFAULT '0' COMMENT '1 - Yes, 0 - No' AFTER `contact`;
* ALTER TABLE `photo_galleries` ADD `is_winner` TINYINT(3) NOT NULL DEFAULT '0' COMMENT '1 - Yes, 0 - No' AFTER `campaign_id`;
------------------------------ DONE on Demo DB --------------------------------



* Masonary:
* https://freefrontend.com/css-masonry-layout-examples/

6. Helps if current solution is not enough (image zoom in/out on modal)
* https://fancyapps.com/playground/vl
* https://www.ajax-zoom.com/examples/example5.php

------------
powerpoint slide page no - 6, 8, 12, 13
