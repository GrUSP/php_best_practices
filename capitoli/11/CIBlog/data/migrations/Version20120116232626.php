<?php

namespace CIBlogMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20120116232626 extends AbstractMigration
{
    public function up(Schema $schema)
    {
    	$this->_addSql('ALTER TABLE `Author` ADD `twitter` VARCHAR(50)');
    }

    public function down(Schema $schema)
    {
    	$this->_addSql('ALTER TABLE `Author` DROP COLUMN `twitter` VARCHAR(50)');
    }
}