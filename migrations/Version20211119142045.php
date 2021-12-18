<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211119142045 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD title_prefix VARCHAR(255) DEFAULT NULL, ADD title_without_prefix VARCHAR(255) DEFAULT NULL, ADD notification_type VARCHAR(255) NOT NULL, ADD product_form_detail VARCHAR(255) DEFAULT NULL, ADD product_composition VARCHAR(255) DEFAULT NULL, ADD collection_type VARCHAR(255) DEFAULT NULL, ADD title_text_collection VARCHAR(255) DEFAULT NULL, ADD publisher_name VARCHAR(255) DEFAULT NULL, ADD publishing_date VARCHAR(255) DEFAULT NULL, ADD publishing_status VARCHAR(255) DEFAULT NULL, ADD city_of_publication VARCHAR(255) DEFAULT NULL, ADD country_of_publication VARCHAR(255) DEFAULT NULL, ADD country_of_manufacture VARCHAR(255) DEFAULT NULL, ADD language_code VARCHAR(255) DEFAULT NULL, CHANGE product_form product_form VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP title_prefix, DROP title_without_prefix, DROP notification_type, DROP product_form_detail, DROP product_composition, DROP collection_type, DROP title_text_collection, DROP publisher_name, DROP publishing_date, DROP publishing_status, DROP city_of_publication, DROP country_of_publication, DROP country_of_manufacture, DROP language_code, CHANGE product_form product_form VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
