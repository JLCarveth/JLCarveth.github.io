/* It would be beneficial if our assignments used correct naming conventions.
It doesn't make sense to be using inconsistent naming throughout a project, especially for
an educational institution which should have examples following industry best practices.

For example, why is it AdminLevel, yet Lastlogin?
*/
CREATE TABLE IF NOT EXISTS `adminusers` (
    AdminID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Username VARCHAR(50),
    Password VARCHAR(50),
    AdminLevel VARCHAR(50),
    Lastlogin DATE
);