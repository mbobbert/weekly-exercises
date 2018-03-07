# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: cbp_discuss
# Generation Time: 2018-02-21 23:42:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `message` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `name`, `message`, `created_at`)
VALUES
	(1,'Dr. Suess','You know you’re in love when you can’t fall asleep because reality is finally better than your dreams.','2018-02-21 23:42:17'),
	(2,'Marilyn Monroe','I’m selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can’t handle me at my worst, then you sure as hell don’t deserve me at my best.','2018-02-21 23:42:17'),
	(3,'John Lennon','Life is what happens when you’re busy making other plans. ','2018-02-21 23:42:17'),
	(4,'Stephen King','Get busy living or get busy dying.','2018-02-21 23:42:17'),
	(5,'Mark Caine','The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself.','2018-02-21 23:42:17'),
	(6,'Helen Keller','When one door of happiness closes, another opens; but often we look so long at the closed door that we do not see the one which has been opened for us.','2018-02-21 23:42:17'),
	(7,'Mark Twain','Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do.','2018-02-21 23:42:17'),
	(8,'Audre Lorde','When I dare to be powerful – to use my strength in the service of my vision, then it becomes less and less important whether I am afraid.','2018-02-21 23:42:17'),
	(9,'William Shakespeare','A friend is one that knows you as you are, understands where you have been, accepts what you have become, and still, gently allows you to grow. ” ','2018-02-21 23:42:17'),
	(10,'David Brinkley','A successful man is one who can lay a firm foundation with the bricks others have thrown at him.','2018-02-21 23:42:17'),
	(11,'John F. Kennedy','Those who dare to fail miserably can achieve greatly.','2018-02-21 23:42:17'),
	(12,'Herbert Bayard Swope','I can’t give you a sure','2018-02-21 23:42:17'),
	(13,'Thomas J. Watson','Would you like me to give you a formula for success? It’s quite simple, really: Double your rate of failure. You are thinking of failure as the enemy of success. But it isn’t at all. You can be discouraged by failure or you can learn from it, so go ahead and make mistakes. Make all you can. Because remember that’s where you will find success.','2018-02-21 23:42:17'),
	(14,'Theodore Roosevelt','It is hard to fail, but it is worse never to have tried to succeed.','2018-02-21 23:42:17'),
	(15,'Abraham Lincoln','I’m a success today because I had a friend who believed in me and I didn’t have the heart to let him down.','2018-02-21 23:42:17'),
	(16,'Lucille Ball','Love yourself first and everything else falls into line. You really have to love yourself to get anything done in this world.','2018-02-21 23:42:17'),
	(17,'Mother Theresa','Let us always meet each other with smile, for the smile is the beginning of love.','2018-02-21 23:42:17'),
	(18,'Joshua J. Marine','Challenges are what make life interesting and overcoming them is what makes life meaningful.','2018-02-21 23:42:17'),
	(19,'Alexander Graham Bell','When one door closes, another opens; but we often look so long and so regretfully upon the closed door that we do not see the one that has opened for us. ','2018-02-21 23:42:17'),
	(20,'Plato','Love is a serious mental disease.','2018-02-21 23:42:17'),
	(21,'Francis Chan','Our greatest fear should not be of failure… but of succeeding at things in life that don’t really matter.','2018-02-21 23:42:17'),
	(22,'Leonardo Da Vinci','It had long since come to my attention that people of accomplishment rarely sat back and let things happen to them. They went out and happened to things.','2018-02-21 23:42:17'),
	(23,'H. Jackson Brown, Jr.','Remember that the happiest people are not those getting more, but those giving more.','2018-02-21 23:42:17'),
	(24,'Anthony Robbins','The only impossible journey is the one you never begin. ','2018-02-21 23:42:17'),
	(25,'J. K Rowling','It is our choices, that show what we truly are, far more than our abilities.','2018-02-21 23:42:17'),
	(26,'Pablo Picasso','Only put off until tomorrow what you are willing to die having left undone.','2018-02-21 23:42:17'),
	(27,'Leo Tolstoy','If you want to be happy, be.','2018-02-21 23:42:17'),
	(28,'Thomas A. Edison','Many of life’s failures are people who did not realize how close they were to success when they gave up.','2018-02-21 23:42:17'),
	(29,'Albert Einstein','If you want to live a happy life, tie it to a goal, not to people or things.','2018-02-21 23:42:17'),
	(30,'Dax Shepard','Success is just a war of attrition. Sure, there’s an element of talent you should probably possess. But if you just stick around long enough, eventually something is going to happen.','2018-02-21 23:42:17'),
	(31,'Elie Wiesel','The opposite of love is not hate; it’s indifference.','2018-02-21 23:42:17'),
	(32,'Elie Wiesel','The good news is that the moment you decide that what you know is more important than what you have been taught to believe, you will have shifted gears in your quest for abundance. Success comes from within, not from without.','2018-02-21 23:42:17'),
	(33,'Henry Ward Beecher','I never knew how to worship until I knew how to love.','2018-02-21 23:42:17'),
	(34,'Harriet Tubman','Every great dream begins with a dreamer. Always remember, you have within you the strength, the patience, and the passion to reach for the stars to change the world.','2018-02-21 23:42:17'),
	(35,'Jim Morrison','A friend is someone who gives you total freedom to be yourself.','2018-02-21 23:42:17'),
	(36,'Harriet Tubman','Every great dream begins with a dreamer. Always remember, you have within you the strength, the patience, and the passion to reach for the stars to change the world.','2018-02-21 23:42:17'),
	(37,'Babe Ruth','Never let the fear of striking out keep you from playing the game.','2018-02-21 23:42:17'),
	(38,'Ralph Waldo Emerson','Live in the sunshine, swim the sea, drink the wild air.','2018-02-21 23:42:17'),
	(39,'Ray Bradbury','Life is trying things to see if they work.','2018-02-21 23:42:17'),
	(40,'David Rockefeller','Success in business requires training and discipline and hard work. But if you’re not frightened by these things, the opportunities are just as great today as they ever were.','2018-02-21 23:42:17');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
