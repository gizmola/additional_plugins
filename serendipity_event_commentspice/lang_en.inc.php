<?php
@define('PLUGIN_EVENT_COMMENTSPICE_TITLE', 'Comment Spice');
@define('PLUGIN_EVENT_COMMENTSPICE_DESC',  'Spice up your comments area with goodies like commenters twitter or last posted article link.');

@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_TWITTERNAME', 'Twittername');
@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_ANNOUNC_RSS', 'Announce recent posts');
@define('PLUGIN_EVENT_COMMENTSPICE_CONFIG_GENERAL', 'General Settings');

@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT', 'Allow commentors to add their twitter name');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_DESC', 'If you enable this, commenters are allowed to enter their twitter names and their twitter timeline will be linked to the comment.');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_NOFOLLOW', 'Set twitter link nofollow');
@define('PLUGIN_EVENT_COMMENTSPICE_TWITTERINPUT_NOFOLLOW_DESC', 'If set to nofollow search engines will ignore the twitter timeline link. It will make it less interesting for manual comment spammers but won\'t give search engine kudos to the real commenter.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS', 'Allow commentors to announce recent posts');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_DESC', 'When the commentor adds a homepage, comment spice will check for a RSS feed on that page. If so, the commentor can choose one of his rescents posts to be announced with his comment.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_NOFOLLOW', 'Set recent post link nofollow');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_NOFOLLOW_DESC', 'If set to nofollow search engines will ignore the recent post link. It will make it less interesting for manual comment spammers but won\'t give search engine kudos to the real commenter.');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_MAXSELECT', 'Maximum article count for announcing');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_MAXSELECT_DESC', 'How many rescent posts should be loaded at maximum the user can announce?');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_CACHEMIN', 'Minutes to cache fetched article results');
@define('PLUGIN_EVENT_COMMENTSPICE_ANNOUNCE_RSS_CACHEMIN_DESC', 'How many minutes CommentSpice should cache fetched article informations? Don\'t set this too high, as new articles will pop up late. one to two hours (60-120min) seems to be a good value. Setting this to zero will switch off the cache.');

@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_TWITTER', 'Smartify twittername output');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_TWITTER_DESC', 'If switched on, CommentSpice won\'t emit code for the commentors twittername but will put all needed infos to the smarty hash. For this to work you have to add new smarty content to your comments.tpl. Available variables are $comment.spice_twitter_name (the twitter name, check if empty), $comment.spice_twitter_url (url of the users timeline), $comment.spice_twitter_nofollow (nofollow configured for twitterlinks), $comment.spice_twitter_icon_html (html producing the twitter icon).');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_RSS', 'Smartify article output');
@define('PLUGIN_EVENT_COMMENTSPICE_SMARTIFY_RSS_DESC', 'If switched on, CommentSpice won\'t emit code for the announced post but will put all needed infos to the smarty hash. For this to work you have to add new smarty content to your comments.tpl. Available variables are $comment.spice_article_name (articles title, check if empty). $comment.spice_article_url (articles url), $comment.spice_article_nofollow (nofollow configured for article links), $comment.spice_article_prefix (prefix in language of visitor).');

@define('PLUGIN_EVENT_COMMENTSPICE_PATH', 'Plugins path');
@define('PLUGIN_EVENT_COMMENTSPICE_PATH_DESC', 'In normal installations the default is correct.');

@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER', 'Read on twitter');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER_FOOTER', 'If you enter your <b>twitter name</b>, your timeline will get linked to your comment.');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_TWITTER_PLACEHOLDER', 'your twittername');

@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_CHOOSE', '- Promote one of your rescent articles -');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_RESCENT', '%s wrote about');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_FOOTER', '<b>Promote one of your rescent articles</b><br/>This blog allows you to announce one of your recent blog articles with your comment. Please enter your the corresponding URL as homepage and a selection box will pop up letting you choose an article.');
@define('PLUGIN_EVENT_COMMENTSPICE_PROMOTE_ARTICLE_CORRUPTED', 'Sorry, unable to verify your "recent post" datas..');
