<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704134008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE income (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, amount DOUBLE PRECISION NOT NULL, account_id INT NOT NULL, income_type_id INT NOT NULL, INDEX IDX_3FA862D0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE savings (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, amount DOUBLE PRECISION NOT NULL, account_id INT NOT NULL, saving_type_id INT NOT NULL, INDEX IDX_12015F1DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE income ADD CONSTRAINT FK_3FA862D0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE savings ADD CONSTRAINT FK_12015F1DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE expenses RENAME INDEX idx_2496f35b9d86650f TO IDX_2496F35BA76ED395');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE income');
        $this->addSql('DROP TABLE savings');
        $this->addSql('ALTER TABLE expenses RENAME INDEX idx_2496f35ba76ed395 TO IDX_2496F35B9D86650F');
    }
}
