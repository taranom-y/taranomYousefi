<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220623080859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attraction ADD creator VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE hotel ADD creator VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messages ADD creator VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE room ADD creator VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attraction DROP creator');
        $this->addSql('ALTER TABLE hotel DROP creator');
        $this->addSql('ALTER TABLE messages DROP creator');
        $this->addSql('ALTER TABLE room DROP creator');
    }
}
