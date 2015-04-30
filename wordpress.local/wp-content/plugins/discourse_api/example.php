<?php

require_once "lib/DiscourseAPI.php";

$api = new DiscourseAPI("apitest.discoursehosting.net", API_KEY, API_HOST_PROTOCOL);

// create user
$r = $api->createUser('Siarhei Hryshayeu', 'Siarhei_Hryshayeu', 'siarhei.hryshayeu@gmail.com', 'sergey123');
print_r($r);
die;
// in order to activate we need the id
$r = $api->getUserByUsername('Siarhei_Hryshayeu');
print_r($r);

// activate the user
$r = $api->activateUser($r->apiresult->user->id);
print_r($r);

// create a category
$r = $api->createCategory('a new category', 'cc2222');
print_r($r);

$catId = $r->apiresult->category->id;

// create a topic
$r = $api->createTopic(
    'This is the title of a brand new topic', 
    "This is the body text of a brand new topic. I really don't know what to say",
    $catId,
    "johndoe"
);
print_r($r);

$topicId = $r->apiresult->id;

$r = $api->createPost(
    'This is the body of a new post in an existing topic',
    $topicId,
    $catId,
    'johndoe'
);
    
// change sitesetting
// use 'true' and 'false' between quotes

$r = $api->changeSiteSetting('invite_expiry_days', 29);
print_r($r);


