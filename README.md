# PHP 1st example using PDO queries

**DB NAME: pdoposts
**TABLE NAME: posts

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
);

I am an active student learning CSS, JS, React JS, Sass, Tailwind CSS, PHP and many other stuffs. Looking for a challenging job opportunity
