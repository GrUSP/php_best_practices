<?php

namespace CIBlogMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20120116231035 extends AbstractMigration
{
    public function up(Schema $schema)
    {
    	$this->_addSql('CREATE TABLE Author (id INT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(50) NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB');
    	$this->_addSql('ALTER TABLE `Post` ADD `author_id` INT NOT NULL AFTER  `title`');
    	$this->_addSql('ALTER TABLE `Post` ADD FOREIGN KEY (author_id) REFERENCES Author(id)');
    }

    public function down(Schema $schema)
    {
    	$this->_addSql('ALTER TABLE `Post` DROP FOREIGN KEY fk_author');
    	$this->_addSql('ALTER TABLE `Post` DROP COLUMN author_id');
    	$this->_addSql('DROP TABLE Author');
    }
}