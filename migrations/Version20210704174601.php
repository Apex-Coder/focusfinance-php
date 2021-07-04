<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210704174601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accounts (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, disabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE expense_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, disabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE income_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, disabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saving_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, disabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE expenses ADD account_id_id INT DEFAULT NULL, ADD expense_type_id_id INT DEFAULT NULL, DROP account_id, DROP expense_type_id');
        $this->addSql('ALTER TABLE expenses ADD CONSTRAINT FK_2496F35B49CB4726 FOREIGN KEY (account_id_id) REFERENCES accounts (id)');
        $this->addSql('ALTER TABLE expenses ADD CONSTRAINT FK_2496F35BC15C26A9 FOREIGN KEY (expense_type_id_id) REFERENCES expense_types (id)');
        $this->addSql('CREATE INDEX IDX_2496F35B49CB4726 ON expenses (account_id_id)');
        $this->addSql('CREATE INDEX IDX_2496F35BC15C26A9 ON expenses (expense_type_id_id)');
        $this->addSql('ALTER TABLE income ADD account_id_id INT DEFAULT NULL, ADD income_type_id_id INT DEFAULT NULL, DROP account_id, DROP income_type_id');
        $this->addSql('ALTER TABLE income ADD CONSTRAINT FK_3FA862D049CB4726 FOREIGN KEY (account_id_id) REFERENCES accounts (id)');
        $this->addSql('ALTER TABLE income ADD CONSTRAINT FK_3FA862D0CBDFB40B FOREIGN KEY (income_type_id_id) REFERENCES income_types (id)');
        $this->addSql('CREATE INDEX IDX_3FA862D049CB4726 ON income (account_id_id)');
        $this->addSql('CREATE INDEX IDX_3FA862D0CBDFB40B ON income (income_type_id_id)');
        $this->addSql('ALTER TABLE savings ADD account_id_id INT DEFAULT NULL, ADD saving_type_id_id INT DEFAULT NULL, DROP account_id, DROP saving_type_id');
        $this->addSql('ALTER TABLE savings ADD CONSTRAINT FK_12015F1D49CB4726 FOREIGN KEY (account_id_id) REFERENCES accounts (id)');
        $this->addSql('ALTER TABLE savings ADD CONSTRAINT FK_12015F1DBE9E0D36 FOREIGN KEY (saving_type_id_id) REFERENCES saving_types (id)');
        $this->addSql('CREATE INDEX IDX_12015F1D49CB4726 ON savings (account_id_id)');
        $this->addSql('CREATE INDEX IDX_12015F1DBE9E0D36 ON savings (saving_type_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expenses DROP FOREIGN KEY FK_2496F35B49CB4726');
        $this->addSql('ALTER TABLE income DROP FOREIGN KEY FK_3FA862D049CB4726');
        $this->addSql('ALTER TABLE savings DROP FOREIGN KEY FK_12015F1D49CB4726');
        $this->addSql('ALTER TABLE expenses DROP FOREIGN KEY FK_2496F35BC15C26A9');
        $this->addSql('ALTER TABLE income DROP FOREIGN KEY FK_3FA862D0CBDFB40B');
        $this->addSql('ALTER TABLE savings DROP FOREIGN KEY FK_12015F1DBE9E0D36');
        $this->addSql('DROP TABLE accounts');
        $this->addSql('DROP TABLE expense_types');
        $this->addSql('DROP TABLE income_types');
        $this->addSql('DROP TABLE saving_types');
        $this->addSql('DROP INDEX IDX_2496F35B49CB4726 ON expenses');
        $this->addSql('DROP INDEX IDX_2496F35BC15C26A9 ON expenses');
        $this->addSql('ALTER TABLE expenses ADD account_id INT NOT NULL, ADD expense_type_id INT NOT NULL, DROP account_id_id, DROP expense_type_id_id');
        $this->addSql('DROP INDEX IDX_3FA862D049CB4726 ON income');
        $this->addSql('DROP INDEX IDX_3FA862D0CBDFB40B ON income');
        $this->addSql('ALTER TABLE income ADD account_id INT NOT NULL, ADD income_type_id INT NOT NULL, DROP account_id_id, DROP income_type_id_id');
        $this->addSql('DROP INDEX IDX_12015F1D49CB4726 ON savings');
        $this->addSql('DROP INDEX IDX_12015F1DBE9E0D36 ON savings');
        $this->addSql('ALTER TABLE savings ADD account_id INT NOT NULL, ADD saving_type_id INT NOT NULL, DROP account_id_id, DROP saving_type_id_id');
    }
}
