@component('layout.components.sidebar-box')
    @slot('title')
        My Recent Tweets
    @endslot

<?php
/*try {
    $limit = 10;
    $twitter = new Zend_Service_Twitter();
    $tweets = $twitter->statusUserTimeline(array('id'=>18414634, 'count'=>50, 'trim_user'=>true, 'include_entities'=>true));
    //var_dump($tweets);
} catch (Exception $ex) {
    ?><!-- TWITTER ERROR: <?=$ex->getMessage()?> --><?php
    return;
}
$shown = 0;*/
/*
 * It should be noted that, while filtering out @replies here instead of on Twitter's end is a very
 *  inefficient way of doing things (as we have to request lots of tweets to ensure that we get the
 *  10 we want, even if there are lots of replies recently posted), the API's "exclude_replies"
 *  option is applied by Twitter *after* limiting the number of tweets to return, making the
 *  "count" option pretty useless. Yes, filtering out replies on Twitter's end would save us a bit
 *  of bandwidth, but it would also mean hacking up the Zend Framework in order to support that
 *  argument, so it just isn't worth the effort.
 */
?>
<?php /*if (count($tweets->status)): ?>
    <div class="tweets">
        <?php foreach ($tweets->status as $tweet): ?>
            <?php if (!empty($tweet->in_reply_to_user_id)) continue; /* skip replies * / ?>
            <p class="tweet" title="Posted at <?php echo $tweet->created_at ?>">
                <?php if (!empty($tweet->place)) { ?>
                    <span class="tweet_geo" title="<?php echo $this->escape($tweet->place->full_name) ?>, <?php echo $this->escape($tweet->place->country) ?>"></span>
                <?php } ?>
                <span class="tweetbody"><?php echo AG_Formatting::linkifyUrlsFromTwitter(AG_Formatting::wordwrapIgnoringUrls($tweet->text, 20, "&shy;"), $tweet->entities) ?></span>
                <a href="https://twitter.com/lorddeath/status/<?php echo $tweet->id ?>">
                    <span class="tweetdate">
                        <?php
                        $d = new Zend_Date(strtotime($tweet->created_at));

                        if ($d->isToday()) {
                            echo "Today";
                        } elseif ($d->isYesterday()) {
                            echo "Yesterday";
                        } elseif ($d->getYear()->equals(Zend_Date::now()->getYear())) {
    //                        if ($d->getMonth()->equals(Zend_Date::now()->getMonth())) {
    //                            echo $d->toString("EEE, d");
    //                        } else {
                                echo $d->toString("EEE, d MMM");
    //                        }
                        } else {
                            echo $d->toString("EEE, d MMM YYYY");
                        }
                        echo " at " . $d->toString("HH:mm:ss");
                        ?>
                    </span>
                </a>
            </p>
            <?php if (++$shown >= $limit) break; ?>
        <?php endforeach; ?>
        <p class="tweet" style="text-align: right;"><a href="http://twitter.com/lorddeath">More...</a></p>
    </div>
<?php endif;*/ ?>
@endcomponent
