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

* CREATE TABLE `vivo_live`.`gallery_photo_likes` ( `photo_gallery_id` BIGINT(20) UNSIGNED NOT NULL COMMENT 'Foreign: `photo_galleries - id`' , `user_id` BIGINT(20) UNSIGNED NOT NULL COMMENT 'Foreign: `users - id`' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;




* Masonary:
* https://freefrontend.com/css-masonry-layout-examples/

6. Helps if current solution is not enough (image zoom in/out on modal)
* https://fancyapps.com/playground/vl
* https://www.ajax-zoom.com/examples/example5.php

