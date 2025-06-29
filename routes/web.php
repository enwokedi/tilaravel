<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {return view('welcome');});

# Home
#------
Route::get('/', function () {return view('home/index');});
Route::get('/embracing-tolerance', function () {return view('home/embracing-tolerance');});
Route::get('/climate-action-now', function () {return view('home/climate-action-now');});
Route::get('/engagement-programme-kenya', function () {return view('home/engagement-programme-kenya');});

# About Us
#----------
Route::get('/about-us', function () {return view('about-us/about-us');});
Route::get('/tolerance-youth-programme-102', function () {return view('about-us/tolerance-youth-programme-102');});
Route::get('/save-the-rainforest', function () {return view('about-us/save-the-rainforest');});
Route::get('/the-corporate-challenge', function () {return view('about-us/the-corporate-challenge');});
Route::get('/national-day-of-tolerance', function () {return view('about-us/national-day-of-tolerance');});
Route::get('/tolerance-the-debate', function () {return view('about-us/tolerance-the-debate');});
Route::get('/what-we-do', function () {return view('about-us/what-we-do');});
Route::get('/who-is-who', function () {return view('about-us/who-is-who');});
Route::get('/annual-report', function () {return view('about-us/annual-report');});
Route::get('/resources', function () {return view('about-us/resources');});

# Fundraising
#-------------
Route::get('/fundraising', function () {return view('fundraising/fundraising');});
Route::get('/for-schools', function () {return view('under-construction/under-construction');}); // Under Construction
Route::get('/for-companies', function () {return view('fundraising/for-companies');});
Route::get('/community-fundraising', function () {return view('fundraising/community-fundraising');});
Route::get('/challenge-yourself', function () {return view('under-construction/under-construction');}); // Under Construction
Route::get('/go-green-extreme-peru', function () {return view('under-construction/under-construction');}); // Under Construction

# Climate Action
#---------------------------------------------------------------------------------------------------------
Route::get('/climate-action', function () {return view('climate-action/climate-action');});
Route::get('/facts-behind-global-warming', function () {return view('climate-action/facts-behind-global-warming');});
Route::get('/what-you-can-do', function () {return view('climate-action/reduce-your-carbon-footprint');});
Route::get('/environmental-justice', function () {return view('climate-action/environmental-justice');});
Route::get('/the-corporate-challenge', function () {return view('climate-action/the-corporate-challenge');});
Route::get('/earth-day-22-april-2008', function () {return view('climate-action/earth-day-22-april-2008');});

# Campaigns
#---------------------------------------------------------------------------------------------------------
Route::get('/campaigns', function () {return view('campaigns/campaigns');});
Route::get('/embracing-tolerance-youth-programme', function () {return view('campaigns/embracing-tolerance-youth-programme');});
Route::get('/88-tools-for-tolerance', function () {return view('campaigns/88-tools-for-tolerance');});

# Programmes in the UK
#---------------------------------------------------------------------------------------------------------
Route::get('/programmes-in-the-uk', function () {return view('uk-programes/programmes-in-the-uk');});
Route::get('/a-lesson-in-tolerance', function () {return view('uk-programes/a-lesson-in-tolerance');});
Route::get('/for-religious-institutions', function () {return view('under-construction/under-construction');});
Route::get('/case-studies', function () {return view('uk-programes/where-we-work');});
Route::get('/case-studies', function () {return view('uk-programes/where-we-work');});
Route::get('/discussion-groups', function () {return view('uk-programes/discussion-groups');});
Route::get('/have-your-say', function () {return view('uk-programes/have-your-say');});

# Programmes Overseas
#---------------------------------------------------------------------------------------------------------
Route::get('/programmes-overseas', function () {return view('overseas-programes/programmes-overseas');});
Route::get('/kenya', function () {return view('overseas-programes/kenya');});
Route::get('/asia', function () {return view('under-construction/under-construction');});
Route::get('/peru', function () {return view('overseas-programes/peru');});
Route::get('/renewable-energy-programmes', function () {return view('overseas-programes/renewable-energy-programmes');});

# News
#---------------------------------------------------------------------------------------------------------
Route::get('/news', function () {return view('news/news');});
Route::get('/tiuk-news', function () {return view('news/news');});
Route::get('/environment', function () {return view('news/environment');});
Route::get('/religious-intolerance', function () {return view('news/religious-intolerance');});
Route::get('/education', function () {return view('news/education');});

# How to Help
#---------------------------------------------------------------------------------------------------------
Route::get('/how-to-help', function () {return view('how-to-help/how-to-help');});
Route::get('/for-groups-and-individuals', function () {return view('how-to-help/how-to-help');});
Route::get('/volunteer', function () {return view('how-to-help/volunteering');});
# /donate link points to http://www.justgiving.com/process/whitelabel/?_WhiteLabelId=1240 but resource is no longer available
Route::get('/shop-tolerance', function () {return view('how-to-help/shop-tolerance');});
Route::get('/sign-up-for-ebulletin', function () {return view('how-to-help/sign-up-for-ebulletin');});
Route::get('/leave-a-legacy', function () {return view('how-to-help/leave-a-legacy');});
Route::get('/support-our-work', function () {return view('how-to-help/support-our-work');});
Route::get('/fundraising-for-ti', function () {return view('fundraising/fundraising');});

# Contact Us
#---------------------------------------------------------------------------------------------------------
Route::get('/contact', function () {return view('contact/contact-us');});
Route::get('/how-to-find-us', function () {return view('contact/how-to-find-us');});
Route::get('/work-with-us', function () {return view('contact/vacancies-at-tolerance-international-uk');});
Route::get('/corporate-support', function () {return view('contact/corporate-support');});
Route::get('/please-ask-us', function () {return view('contact/please-ask-us');});
Route::get('/press', function () {return view('contact/press');});

# PDFs
#---------------------------------------------------------------------------------------------------------
Route::get('/free-audit-form', function () {return view('frontend\pdf\Free_audit_form.doc');});

# Under Construction
#---------------------------------------------------------------------------------------------------------
Route::get('/under-construction', function () {return view('under-construction/under-construction');});