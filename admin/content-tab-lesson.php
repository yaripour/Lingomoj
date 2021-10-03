
<?php

$course = get_post_meta(get_the_ID() , 'lingomoj_group_lesson' , true);


if (!empty($course)) {
    ?>
    <div class="lesson-course">
        <ul>
            <?php foreach ( $course as $item) : ?>
                <li>
                    <h4><?php echo $item['lingomoj_course_chapter_title']; ?>
                        <i class="fas fa-angle-down"></i>
                    </h4>
                    <ul>
                        <div class="meta-course">
                            <div class="time-course">
                                <i class="fas fa-clock"></i>
                                <span>مدت زمان فصل : </span>
                                <span><?php echo $item['lingomoj_course_chapter_time']; ?></span>
                            </div>
                            <div class="dl-course">
                                <a href="<?php echo $item['lingomoj_course_chapter_link']; ?>" target="_blank">
                                    <i class="fas fa-download"></i>
                                    لینک دانلود کل فصل
                                </a>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <?php foreach ($item['lingomoj_course_chapter_lesson'] as $value) : ?>
                            <li><i class="fas fa-check"></i>
                                <?php echo $value; ?>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
<?php } ?>
