<?php

require 'vendor/autoload.php';

use Alexis\Poo\modelos\ImagePost;
use Alexis\Poo\modelos\Post;
use Alexis\Poo\modelos\User;
use Alexis\Poo\modelos\VideoPost;

$alexis = new User("Alexis Tenorio", "alexisth", "alexis@gmail.com", "alexis1230");
$ari = new User("Aranza Sanchez", "ara.sa", "aranza@gmail.com", "aranza123");
$ruby = new User("Ruby Vazquez", "ruby.11", "ruby@gmail.com", "ruby1230");
$montse = new User("Montse Garcia", "montsegarcc", "montse@gmail.com", "montse1230");


$alexisPost = new ImagePost("De vacaciones en la playa con mi amorcito", "IMG00543.jgp");
$ariPost = new VideoPost("De vacaciones en la playa con mi amorcito esta semana", "playita.mov");
$rubyPost = new ImagePost("De vacaciones en la playa en Veracruz", "IMG005483.jgp");
$montsePost = new VideoPost("De vacaciones en la playa en Cancun", "Vacaciones.mp4");

$alexis->publish($alexisPost);
$ari->publish($ariPost);
$ari->publish($ariPost);
$ari->publish($ariPost);
$ruby->publish($rubyPost);
$montse->publish($montsePost);

$alexisPost->addLike($ari);
$alexisPost->addLike($alexis);

$ariPost->addLike($alexis);
$ariPost->addLike($ruby);
$ariPost->addLike($montse);
$ariPost->addLike($ari);

$rubyPost->addLike($alexis);
$rubyPost->addLike($montse);
$rubyPost->addLike($ari);

$montsePost->addLike($alexis);
$montsePost->addLike($ari);
$montsePost->addLike($montse);

$alexis->addFollower($ari);

$ari->addFollower($montse);
$ari->addFollower($alexis);
$ari->addFollower($ruby);

$ruby->addFollower($alexis);
$ruby->addFollower($montse);
$ruby->addFollower($ari);

$montse->addFollower($alexis);

print_r(User::showProfile($alexis));
print_r(User::showProfile($ari));
print_r(User::showProfile($ruby));
print_r(User::showProfile($montse));

print_r($alexisPost->toString());
print_r($ariPost->toString());
print_r($rubyPost->toString());
print_r($montsePost->toString());

echo "\n";
?>