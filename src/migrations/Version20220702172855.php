<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220702172855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E96E104C1D3 FOREIGN KEY (created_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E96BB649746 FOREIGN KEY (updated_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BBB649746');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BE104C1D3');
        $this->addSql('DROP INDEX fk_729f519be104c1d3 ON room');
        $this->addSql('CREATE INDEX IDX_729F519BE104C1D3 ON room (created_user_id)');
        $this->addSql('DROP INDEX fk_729f519bbb649746 ON room');
        $this->addSql('CREATE INDEX IDX_729F519BBB649746 ON room (updated_user_id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BBB649746 FOREIGN KEY (updated_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BE104C1D3 FOREIGN KEY (created_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD created_user_id INT DEFAULT NULL, ADD updated_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649E104C1D3 FOREIGN KEY (created_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649BB649746 FOREIGN KEY (updated_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649E104C1D3 ON user (created_user_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649BB649746 ON user (updated_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E96E104C1D3');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E96BB649746');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BE104C1D3');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BBB649746');
        $this->addSql('DROP INDEX idx_729f519bbb649746 ON room');
        $this->addSql('CREATE INDEX FK_729F519BBB649746 ON room (updated_user_id)');
        $this->addSql('DROP INDEX idx_729f519be104c1d3 ON room');
        $this->addSql('CREATE INDEX FK_729F519BE104C1D3 ON room (created_user_id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BE104C1D3 FOREIGN KEY (created_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BBB649746 FOREIGN KEY (updated_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649E104C1D3');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649BB649746');
        $this->addSql('DROP INDEX IDX_8D93D649E104C1D3 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649BB649746 ON user');
        $this->addSql('ALTER TABLE user DROP created_user_id, DROP updated_user_id');
    }
}
