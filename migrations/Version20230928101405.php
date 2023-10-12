<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230928101405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, id_level_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_D4DB71B5F6AA732 (id_level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B5F6AA732 FOREIGN KEY (id_level_id) REFERENCES level (id)');
        $this->addSql('ALTER TABLE guide ADD id_language_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE guide ADD CONSTRAINT FK_CA9EC7359AE37703 FOREIGN KEY (id_language_id) REFERENCES language (id)');
        $this->addSql('CREATE INDEX IDX_CA9EC7359AE37703 ON guide (id_language_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE guide DROP FOREIGN KEY FK_CA9EC7359AE37703');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B5F6AA732');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP INDEX IDX_CA9EC7359AE37703 ON guide');
        $this->addSql('ALTER TABLE guide DROP id_language_id');
    }
}
