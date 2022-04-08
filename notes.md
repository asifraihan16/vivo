### Optimize Laravel On Production
> https://www.cloudways.com/blog/laravel-performance-optimization/

// TODO:
* Enable opcache - done
* add google analytics - done


# DB CHANGES
* pa migrate --path=/database/migrations/2022_04_06_173312_create_blog_comments_table.php
* ALTER TABLE `photo_galleries` ADD `img_thumbnail` VARCHAR(255) NULL DEFAULT NULL AFTER `img`;
* pa migrate --path=/database/migrations/2022_04_08_141204_create_faqs_table.php
------------------------------ DONE --------------------------------
