
-- Database: `form`

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_inscription` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_envoyer` datetime NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rdv` int(100) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_heure` varchar(12) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_envoyer` datetime NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;