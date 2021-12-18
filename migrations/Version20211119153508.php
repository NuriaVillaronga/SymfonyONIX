<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211119153508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD copyrigth_year VARCHAR(255) DEFAULT NULL, ADD number_of_pages VARCHAR(255) DEFAULT NULL, ADD edition_number VARCHAR(255) DEFAULT NULL, ADD subtitle VARCHAR(255) DEFAULT NULL, ADD collection_sequence_number VARCHAR(255) DEFAULT NULL, ADD epub_technical_protection VARCHAR(255) DEFAULT NULL, ADD product_packaging VARCHAR(255) DEFAULT NULL, ADD primary_content_type VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP copyrigth_year, DROP number_of_pages, DROP edition_number, DROP subtitle, DROP collection_sequence_number, DROP epub_technical_protection, DROP product_packaging, DROP primary_content_type');
    }
}
