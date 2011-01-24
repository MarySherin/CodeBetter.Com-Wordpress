<?php

/***********************************Advance Usage*********************************/
global $dd_manual_code;
$dd_manual_code = array(
	"Digg" => array(
		"Normal" => "dd_digg_generate('Normal')",
		"Compact" => "dd_digg_generate('Compact')",
		"Icon" => "dd_digg_generate('Icon')"
	),
	"Reddit" => array(
		"Normal" => "dd_reddit_generate('Normal')",
		"Compact" => "dd_reddit_generate('Compact')",
		"Icon" => "dd_reddit_generate('Icon')"
	),
	"DZone" => array(
		"Normal" => "dd_dzone_generate('Normal')",
		"Compact" => "dd_dzone_generate('Compact')"
	),
	"Yahoo Buzz" => array(
		"Normal" => "dd_ybuzz_generate('Normal')",
		"Compact" => "dd_ybuzz_generate('Compact')",
		"Compact_Text" => "dd_ybuzz_generate('Compact_Text')"
	),
	"Twitter" => array(
		"Normal" => "dd_twitter_generate('Normal','twitter_username')",
		"Compact" => "dd_twitter_generate('Compact','twitter_username')"
	),
	"TweetMeme" => array(
		"Normal" => "dd_tweetmeme_generate('Normal','twitter_username')",
		"Normal + URL" => "dd_tweetmeme_generate('Normal','twitter_username','awe.sm')",
		"Normal + URL + API" => "dd_tweetmeme_generate('Normal','twitter_username','bit.ly','api_key')",
		"Compact" => "dd_tweetmeme_generate('Compact','twitter_username')",
		"Compact + URL" => "dd_tweetmeme_generate('Compact','twitter_username','awe.sm')",
		"Compact + URL + API" => "dd_tweetmeme_generate('Compact','twitter_username','bit.ly','api_key')",	
	),
	"Tospy" => array(
		"Normal" => "dd_topsy_generate('Normal','twitter_username')",
		"Normal + Theme" => "dd_topsy_generate('Normal','twitter_username','theme_code')",
		"Compact" => "dd_topsy_generate('Compact','twitter_username')",
		"Compact + Theme" => "dd_topsy_generate('Compact','twitter_username','theme_code')"
	),
	"FaceBook Share" => array(
		"Normal" => "dd_fbshare_generate('Normal')",
		"Compact" => "dd_fbshare_generate('Compact')"
	),
	"FBShare.Me" => array(
		"Normal" => "dd_fbshareme_generate('Normal')",
		"Compact" => "dd_fbshareme_generate('Compact')"
	),
	"FaceBook Like" => array(
		"Like Standard" => "dd_fblike_generate('Like Standard')",
		"Like Button Count" => "dd_fblike_generate('Like Button Count')",
		"Like Box Count" => "dd_fblike_generate('Like Box Count')",
		"Recommend Standard" => "dd_fblike_generate('Recommend Standard')",
		"Recommend Button Count" => "dd_fblike_generate('Recommend Button Count')",
		"Recommend Box Count" => "dd_fblike_generate('Recommend Box Count')"
	),
	"StumbleUpon" => array(
		"Normal" => "dd_stumbleupon_generate('Normal')",
		"Compact" => "dd_stumbleupon_generate('Compact')"
	),
	"Delicious" => array(
		"Normal" => "dd_delicious_generate('Normal')",
		"Compact" => "dd_delicious_generate('Compact')"
	),
	"Google Buzz" => array(
		"Normal" => "dd_gbuzz_generate('Normal')",
		"Compact" => "dd_gbuzz_generate('Compact')"
	),
	"The Web Blend" => array(
		"Normal" => "dd_thewebblend_generate('Normal')",
		"Compact" => "dd_thewebblend_generate('Compact')"
	),
	"DesignBump" => array(
		"Normal" => "dd_designbump_generate('Normal')"
	),
	"BlogEngage" => array(
		"Normal" => "dd_blogengage_generate('Normal')"
	),
	"PostComment" => array(
		"Normal" => "dd_post_comments_generate('Normal')"
	),
	"Linkedin" => array(
		"Normal" => "dd_linkedin_generate('Normal')",
		"Compact" => "dd_linkedin_generate('Compact')",
		"NoCount" => "dd_linkedin_generate('NoCount')"
	)
);		
	
function dd_digg_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_digg = new DD_Digg();
    $dd_digg->constructURL($link[0],$title,$buttonDesign,$id, false);
			
	echo $dd_digg->finalURL;
}	

function dd_linkedin_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_linkedin = new DD_Linkedin();
    $dd_linkedin->constructURL($link[0],$title,$buttonDesign,$id, false);
			
	echo $dd_linkedin->finalURL;
}	

function dd_reddit_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_reddit = new DD_Reddit();
    $dd_reddit->constructURL($link[0],$title,$buttonDesign,$id, false);

	echo $dd_reddit->finalURL;
}

function dd_dzone_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_dzone = new DD_DZone();
    $dd_dzone->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_dzone->finalURL;
}

function dd_ybuzz_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_ybuzz = new DD_YBuzz();
    $dd_ybuzz->constructURL($link[0],$title,$buttonDesign,$id, false);
    
	echo $dd_ybuzz->finalURL;
}

function dd_twitter_generate($buttonDesign='Normal', $source=''){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    global $globalcfg;
    $globalcfg[DD_GLOBAL_TWITTER_OPTION][DD_GLOBAL_TWITTER_OPTION_SOURCE] = $source;
    
    $dd_twitter = new DD_Twitter();
    $dd_twitter->constructURL($link[0],$title,$buttonDesign,$id,false,$globalcfg);
    
	echo $dd_twitter->finalURL;
}

function dd_tweetmeme_generate($buttonDesign='Normal', $source='', $service='',$serviceapi=''){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
	
    global $globalcfg;
    $globalcfg[DD_GLOBAL_TWEETMEME_OPTION][DD_GLOBAL_TWEETMEME_OPTION_SOURCE] = $source;
    $globalcfg[DD_GLOBAL_TWEETMEME_OPTION][DD_GLOBAL_TWEETMEME_OPTION_SERVICE] = $service;
    $globalcfg[DD_GLOBAL_TWEETMEME_OPTION][DD_GLOBAL_TWEETMEME_OPTION_SERVICE_API] = $serviceapi;
    
    $dd_tweetmeme = new DD_TweetMeme();
    $dd_tweetmeme->constructURL($link[0],$title,$buttonDesign,$id,false,$globalcfg);
     
	echo $dd_tweetmeme->finalURL;
}

function dd_topsy_generate($buttonDesign='Normal', $source='', $theme='blue'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
	
    global $globalcfg;
    $globalcfg[DD_GLOBAL_TOPSY_OPTION][DD_GLOBAL_TOPSY_OPTION_SOURCE] = $source;
    $globalcfg[DD_GLOBAL_TOPSY_OPTION][DD_GLOBAL_TOPSY_OPTION_THEME] = $theme;
  
    $dd_topsy = new DD_Topsy();
    $dd_topsy->constructURL($link[0],$title,$buttonDesign,$id,false,$globalcfg);
    
	echo $dd_topsy->finalURL;
}

function dd_fbshare_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_fbshare = new DD_FbShare();
    $dd_fbshare->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_fbshare->finalURL;
}

function dd_fbshareme_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_fbshareme = new DD_FbShareMe();
    $dd_fbshareme->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_fbshareme->finalURL;
}

function dd_fblike_generate($buttonDesign='Like Standard'){

	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_fblike = new DD_FbLike();
    $dd_fblike->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_fblike->finalURL;
}

function dd_stumbleupon_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_stumbleupon = new DD_StumbleUpon();
    $dd_stumbleupon->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_stumbleupon->finalURL;
}	

function dd_delicious_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_delicious = new DD_Delicious();
    $dd_delicious->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_delicious->finalURL;
}	

function dd_sphinn_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_sphinn = new DD_Sphinn();
    $dd_sphinn->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_sphinn->finalURL;
}	

function dd_gbuzz_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_gbuzz = new DD_GBuzz();
    $dd_gbuzz->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_gbuzz->finalURL;
}

function dd_designbump_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_designbump = new DD_DesignBump();
    $dd_designbump->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_designbump->finalURL;
}	

function dd_thewebblend_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_webblend = new DD_TheWebBlend();
    $dd_webblend->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_webblend->finalURL;
}	

function dd_blogengage_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_blogengage = new DD_BlogEngage();
    $dd_blogengage->constructURL($link[0],$title,$buttonDesign,$id,false);
    
	echo $dd_blogengage->finalURL;
}

function dd_post_comments_generate($buttonDesign='Normal'){
	
	global $wp_query; 
    $post = $wp_query->post; //get post content
    $id = $post->ID; //get post id
    $comments = $post->comment_count; //get post comments
    $postlink = get_permalink($id); //get post link
    $title = trim($post->post_title); // get post title
    $link = split(DD_DASH,$postlink); //split the link with '#', for comment
    
    $dd_comments = new DD_Comments();
    $dd_comments->constructURL($link[0],$title,$buttonDesign,$id, false,'',$comments);
			
	echo $dd_comments->finalURL;
}	
?>