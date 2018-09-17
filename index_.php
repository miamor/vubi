<?php include 'include/config.php';
include 'objects/about.php';
include 'objects/doctors.php';
include 'objects/news.php';
include 'objects/feedback.php';
include 'objects/partners.php';

$about = new About();
$news = new News();
$doctors = new Doctors();
$feedback = new Feedback();
$partners = new Partners();

$info = $about->getInfo();
$tuvanNewsHighlight = $news->readMany(0, 2);
$tuvanNews = $news->readMany(2, 2);

$doctorsList = $doctors->readAll();
$feedbackList = $feedback->readAll();
$partnersList = $partners->readAll(); ?>
