CREATE TABLE IF NOT EXISTS `mailingList` (
  _id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  firstName VARCHAR(50) NOT NULL,
  lastName VARCHAR(50) NOT NULL,
  phoneNumber VARCHAR(15) NOT NULL,
  emailAddress VARCHAR(70) NOT NULL,
  userName VARCHAR(50) NOT NULL,
  referrer VARCHAR(50) NOT NULL
);