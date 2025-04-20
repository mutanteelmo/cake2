CREATE DATABASE IF NOT EXISTS cakephp;
CREATE DATABASE IF NOT EXISTS cakephp_tests;

CREATE USER 'cakeuser'@'%' IDENTIFIED BY '123';
CREATE USER 'cakeuser_tests'@'%' IDENTIFIED BY '123';

GRANT ALL PRIVILEGES ON cakephp.* TO 'cakeuser'@'%';
GRANT ALL PRIVILEGES ON cakephp_tests.* TO 'cakeuser_tests'@'%';

FLUSH PRIVILEGES;